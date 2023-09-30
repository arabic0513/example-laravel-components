    <div class="d-flex" style="column-gap: 10px;">
        <select data-placeholder="Выберите ключ" id='social' class="w-full" name="key" onchange="cbChanged(this)" style="min-width: 400px"></select>

        <script !src="">
            $(document).ready(function(){
                $("#social").select2({
                    allowClear: true,
                    templateResult: formatState,
                });
            });

            function formatState (state) {
                var option = document.getElementById(state.id);
                var vo = $(option).attr('vo');
                if (vo !== undefined)
                {
                    var data = JSON.parse(vo);
                    console.log(data)
                    var valid = data.expired ? '<font size="-1" color=red><b>Срок действия сертификата: </b>' + formatDate(data.validFrom) + '-' + formatDate(data.validTo) +' истек</font>' : '<font size="-1"><b>Срок действия сертификата: </b>' + formatDate(data.validFrom) + '-' + formatDate(data.validTo) +'</font>';
                    var textUserType = (data.O === ''||data.O === 'НЕ УКАЗАНО') ? 'ФИЗИЧЕСКОЕ ЛИЦО' : 'ЮРИДИЧЕСКОЕ ЛИЦО';
                    var organization = (data.O === ''||data.O === 'НЕ УКАЗАНО') ? '': '<b>Организация:&nbsp;&nbsp;</b>' + data.O + '<br>';
                    var $state = $(
                        '<span><div class="d-flex"><img src="https://esi.uz/oauth2/assets/images/icons/pfx.ico" style="height: 1.5em;width: 1.5em;">&nbsp;&nbsp;<b>№ СЕРТИФИКАТА:&nbsp;&nbsp;</b>'+ data.serialNumber + '</div>' + '<b>ИНН:&nbsp;&nbsp;</b>' + data.TIN +'<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+ textUserType +'</b>' + '<br>' + '<b>Ф.И.О:&nbsp;&nbsp;</b>' + data.CN + '<br>' + organization + valid + '</span>'
                    );
                    return $state;
                }
            }
            function formatDate(date) {
                var d = new Date(date),
                    month = '' + (d.getMonth() + 1),
                    day = '' + d.getDate(),
                    year = d.getFullYear();

                if (month.length < 2)
                    month = '0' + month;
                if (day.length < 2)
                    day = '0' + day;

                return [year, month, day].join('-');
            }
        </script>
    </div>
    <div hidden id="keyId" class="none"></div>

    <input type="hidden" name="eri_fullname" id="eri_fullname">
    <input type="hidden" name="eri_inn" id="eri_inn">
    <input type="hidden" name="eri_pinfl" id="eri_pinfl">
    <input type="hidden" name="eri_sn" id="eri_sn">
    <textarea hidden class="none" name="eri_data" id="eri_data">Authorization</textarea>
    <textarea hidden class="none" name="eri_hash" id="eri_hash"></textarea>