<?php

namespace App\DataTables\Scopes;


//use Debugbar;
use Yajra\DataTables\Contracts\DataTableScope;
//use App\Models\Concerns\SearchBuilder;

class SearchBuilder implements DataTableScope
{
    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query
     * @return mixed
     */
    public function apply($query)
    {
//        Debugbar::info($query);
        // return $query->where('id', 1);
        return $this->scopeSearchBuilder($query);
    }
    public function scopeSearchBuilder($query)
    {
        if (request()->filled('searchBuilder') && request()->query('searchBuilder') !== 'false') {
            $query->where(function ($query) {
                $columns = request()->query('columns');
                $columns = collect($columns);
                $this->searchBuilderCondition($query, request()->query('searchBuilder'), $columns);
            });
        }

//        Debugbar::info($test->where('data', 'Account_Name')->first());
    }

    protected function searchBuilderCondition($query, $data, $columns)
    {
        $first = true;

        if (!isset($data['criteria'])) {
            return;
        }
        // Iterate over every group or criteria in the current group
        foreach ($data['criteria'] as $crit) {
            // If criteria is defined then this must be a group
            if (isset($crit['criteria'])) {
                // Check if this is the first, or if it is and logic
                if ($data['logic'] === 'AND' || $first) {
                    // Call the function for the next group
                    $query->where(function ($q) use ($crit, $columns) {
                        $this->searchBuilderCondition($q, $crit, $columns);
                    });
                    // Set first to false so that in future only the logic is checked
                    $first = false;
                } else {
                    $query->orWhere(function ($q) use ($crit, $columns) {
                        $this->searchBuilderCondition($q, $crit, $columns);
                    });
                }
            } else if (isset($crit['condition']) && (isset($crit['value1']) || $crit['condition'] === 'null' || $crit['condition'] === '!null')) {
                // Sometimes the structure of the object that is passed across is named in a strange way.
                // This conditional assignment solves that issue
                $val1 = isset($crit['value1']) ? $crit['value1'] : '';
                $val2 = isset($crit['value2']) ? $crit['value2'] : '';

                if (strlen($val1) === 0 && $crit['condition'] !== 'null' && $crit['condition'] !== '!null') {
                    continue;
                }
                if (strlen($val2) === 0 && ($crit['condition'] === 'between' || $crit['condition'] === '!between')) {
                    continue;
                }

                $column = $columns->where('data', $crit['origData'])->first();
                $crit['origData'] = $column['name'] ?? $crit['origData'];
                //Debugbar::info($crit['origData']);

                // Switch on the condition that has been passed in
                switch ($crit['condition']) {
                    case '=':
                        // Check if this is the first, or if it is and logic
                        if ($data['logic'] === 'AND' || $first) {
                            // Call the where function for this condition
                            $query->where($crit['origData'], '=', $val1);
                            // Set first to false so that in future only the logic is checked
                            $first = false;
                        } else {
                            // Call the orWhere function - has to be or logic in this block
                            $query->orWhere($crit['origData'], '=', $val1);
                        }
                        break;
                    case '!=':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], '!=', $val1);
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '!=', $val1);
                        }
                        break;
                    case 'contains':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], 'LIKE', '%' . $val1 . '%');
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], 'LIKE', '%' . $val1 . '%');
                        }
                        break;
                    case 'starts':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], 'LIKE', $val1 . '%');
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], 'LIKE', $val1 . '%');
                        }
                        break;
                    case 'ends':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], 'LIKE', '%' . $val1);
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], 'LIKE', '%' . $val1);
                        }
                        break;
                    case '<':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], '<', $val1);
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '<', $val1);
                        }
                        break;
                    case '<=':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], '<=, $val1');
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '<=, $val1');
                        }
                        break;
                    case '>=':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], '>=, $val1');
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '>=, $val1');
                        }
                        break;
                    case '>':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where($crit['origData'], '>', $val1);
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '>', $val1);
                        }
                        break;
                    case 'between':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where(function ($q) use ($crit, $val1, $val2) {
                                $q->where($crit['origData'], '>=', is_numeric($val1) ? intval($val1) : $val1)->where($crit['origData'], '<=', is_numeric($val2) ? intval($val2) : $val2);
                            });
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '>=', is_numeric($val1) ? intval($val1) : $val1)->where($crit['origData'], '<=', is_numeric($val2) ? intval($val2) : $val2);
                        }
                        break;
                    case '!between':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where(function ($q) use ($crit, $val1, $val2) {
                                $q->where($crit['origData'], '<', is_numeric($val1) ? intval($val1) : $val1)->orWhere($crit['origData'], '<', is_numeric($val2) ? intval($val2) : $val2, '>');
                            });
                            $first = false;
                        } else {
                            $query->orWhere($crit['origData'], '<', is_numeric($val1) ? intval($val1) : $val1)->orWhere($crit['origData'], '<', is_numeric($val2) ? intval($val2) : $val2, '>');
                        }
                        break;
                    case 'null':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where(function ($q) use ($crit) {
                                $q->where($crit['origData'], "=", null);
                                if (strpos($crit['type'], 'date') === false && strpos($crit['type'], 'moment') === false && strpos($crit['type'], 'luxon') === false) {
                                    $q->orWhere($crit['origData'], "=", "");
                                }
                            });
                            $first = false;
                        } else {
                            $query->orWhere(function ($q) use ($crit) {
                                $q->where($crit['origData'], "=", null);
                                if (strpos($crit['type'], 'date') === false && strpos($crit['type'], 'moment') === false && strpos($crit['type'], 'luxon') === false) {
                                    $q->orWhere($crit['origData'], "=", "");
                                }
                            });
                        }
                        break;
                    case '!null':
                        if ($data['logic'] === 'AND' || $first) {
                            $query->where(function ($q) use ($crit) {
                                $q->where($crit['origData'], "!=", null);
                                if (strpos($crit['type'], 'date') === false && strpos($crit['type'], 'moment') === false && strpos($crit['type'], 'luxon') === false) {
                                    $q->where($crit['origData'], "!=", "");
                                }
                            });
                            $first = false;
                        } else {
                            $query->orWhere(function ($q) use ($crit) {
                                $q->where($crit['origData'], "!=", null);
                                if (strpos($crit['type'], 'date') === false && strpos($crit['type'], 'moment') === false && strpos($crit['type'], 'luxon') === false) {
                                    $q->where($crit['origData'], "!=", "");
                                }
                            });
                        }
                        break;
                    default:
                        break;
                }
            }
        }
    }
}
