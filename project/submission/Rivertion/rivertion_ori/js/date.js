    $(testing).ready(function () {

        $("#dt1").datepicker({
            dateFormat: "dd-M-yy",
            minDate: 0,
            onSelect: function () {
                var dt2 = $('#dt2');
                var startDate = $(this).datepicker('getDate');
                var minDate = $(this).datepicker('getDate');
                var dt2Date = dt2.datepicker('getDate');
                //difference in days. 86400 seconds in day, 1000 ms in second
                var dateDiff = (dt2Date - minDate)/(86400 * 1000);
                
                startDate.setDate(startDate.getDate() + 60);
                if (dt2Date == null || dateDiff < 0) {
                		dt2.datepicker('setDate', minDate);
                }
                else if (dateDiff > 30){
                		dt2.datepicker('setDate', startDate);
                }
                //sets dt2 maxDate to the last day of 30 days window
                dt2.datepicker('option', 'maxDate', startDate);
                dt2.datepicker('option', 'minDate', minDate);
            }
        });
        $('#dt2').datepicker({
            dateFormat: "dd-M-yy",
            minDate: 0
        });
    });