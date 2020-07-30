$(document).ready(function() {

    $.ajax({
        type: "GET",
        url: 'getsession.php',
        success: function (data) {
            console.log(data);
            if(data){
               $('#history_rows').empty();
               $('#history_rows').val(data);
            }
        },
        error: function (data) {
            console.log('Errror');
        }
    });


    $.ajax({
        type: "GET",
        url: 'currencies.php',
        success: function (data) {
            $("#from").append(data);
            $("#to").append(data);
        },
        error: function (data) {
            console.log('Errror');
        }
    });

    $.ajax({
        type: "GET",
        url: 'actions.php',
        success: function (data) {
            if(data){
                $('#no_data').hide();
                $("#history").show();
                $("#table_body").empty();
                $("#table_body").append(data);
            }
        },
        error: function (data) {
            console.log('Errror');
        }
    });


    $('#submit').click(function(){

        amount = $('#amount').val();
        amount_el = $('#amount');
        from = $('#from').val();
        to = $('#to').val();

        if (checkInput(amount, '#amount')){

            $.ajax({
                type: "POST",
                url: 'count.php',
                data: {
                    amount: amount,
                    from: from,
                    to: to
                },
                success: function (data) {
                    $('#amount_error').hide();
                    $("#result").empty();
                    $("#result").append(data);
                    getActions();
                },
                error: function (data) {
                    console.log('Errror');
                }
            });

        } else {

            $('#amount').css('border',"3px solid #dc3545");
            $('#amount_error').show();
        }
    });

    function getActions(){
        $.ajax({
            type: "GET",
            url: 'actions.php',
            success: function (data) {
                $("#table_body").empty();
                $("#table_body").append(data);
            },
            error: function (data) {
                console.log('Errror');
            }
        });
    }

    function checkInput(input, selector){

        if( input !== ""){

            $(selector).css('border', '1px solid #ced4da');

            return true;

        } else {

            return false;
        }
    }

    $('#history_button').click(function(){

        history_rows = $('#history_rows').val();

        if (checkInput(history_rows, '#history_rows')){

            $.ajax({
                type: "POST",
                url: 'setsession.php',
                data: {
                    history: history_rows,
                },
                success: function (data) {

                    $('#history_rows').css('border', '1px solid #ced4da');
                    console.log("HISTORY");
                },
                error: function (data) {
                    console.log('Errror');
                }
            });

        } else {

            $('#history_rows').css('border',"3px solid #dc3545");
        }
    });
});
