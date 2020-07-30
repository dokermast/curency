<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Currency Calc</title>
</head>
<body>

<div class="container">
    <div class="text-center">
        <h3>Vitalii CHE Currency Exchange Form</h3>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <form>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" name="amount" class="form-control" id="amount" aria-describedby="amount">
                        <small id="amount_error" class="form-text text-muted" style="display: none; color: red">Amount Input is Empty</small>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="amount">Currency FROM</label>
                        <select id="from" name="from"  class="form-control">
                            <option>USD</option>

                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="amount">Currency TO</label>
                        <select id="to" name="to" class="form-control">
                            <option>USD</option>

                        </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-sm">
            <div class="form-group text-center">
                <button id="submit" class="btn btn-primary"  style="margin-top: 32px">Count</button>
            </div>
        </div>

        <!--  SET HISTORY ROWS    -->
        <div class="col-sm">
            <div class="form-group">
                <label for="amount">Show HISTORY rows</label>
                <input id="history_rows" type="number" name="history_rows" class="form-control" >
            </div>
        </div>

        <div class="col-sm">
            <div class="form-group text-center">
                <button id="history_button" class="btn btn-primary"  style="margin-top: 32px">History rows</button>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-2">
            <span>Result : </span>
            <span id="result" style="font-size: 20px; color: lightseagreen"></span>
        </div>
        <div class="col-sm-10"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!--  HISTORY  -->
    <div id="actions_table" class="container">
        <div class="text-center">
            <h3>History table</h3>
        </div>
        <div class="text-center">
            <p>default show 10 last rows</p>
        </div>
        <div id="no_data" class="text-center">
            <span class="text-center">No data to show</span>
        </div>
        <table id="history" class="table" style="display: none">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">From</th>
                    <th scope="col">To</th>
                    <th scope="col">Result</th>
                </tr>
            </thead>
            <tbody id="table_body">
            </tbody>
        </table>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


