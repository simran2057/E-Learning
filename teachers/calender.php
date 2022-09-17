<?php
session_start();
$teacherid = $_SESSION['t_id'];
$stdname = $_SESSION['name'];
require("../connection/config.php");
require("connection/secureuser.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
  <script src="assets/js/scripts.js"></script>
</head>
<style>
    .container {
        font-family: 'NOto Sans', sans-serif;
        margin-top: 80px;
    }

    th {
        height: 30px;
        text-align: center;
        font-weight: bolder;
        color: #154360;
    }

    td {
        height: 70px;
        font-weight: bold;
    }

    th:nth-of-type(7),
    td:nth-of-type(7) {
        color: #E74C3C;
    }

   

    .calender {
        font-size: x-large;
    }
</style>

<body class="bg-gray-200">
    <?php
    require('inc/navbar.php')
    ?>

    <!-- strat wrapper -->
    <div class=" flex flex-row flex-wrap p-4  ">
        <?php
        require('inc/sidebar.php')
        ?>
        <div class=" flex-1 p-6 md:mt-16 bg-white ml-10 rounded-md">
            
        <div class="container">
        <div class="bg-primary p-2 rounded-md text-center font-bold ">
                <span class="bg-primary p-2 w-full rounded-md text-white mb-4">Event Calender   (September , 2022)</span>
            </div>
                <table class="table table-bordered border-x-2 border-black mt-4 ">
                    <tr >
                        <th>Sun</th>
                        <th>Mon</th>
                        <th>Tue</th>
                        <th>Wed</th>
                        <th>Thu</th>
                        <th>Fri</th>
                        <th>Sat</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td class="bg-primary text-white" width=15%>11 (Sports Meet)</td>
                        <td>12</td>
                        <td>13</td>
                        <td>14</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td>22</td>
                        <td>23</td>
                        <td>24</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>26</td>
                        <td>27</td>
                        <td class="bg-primary text-white" width=15%>28 (Program)</td>
                        <td>29</td>
                        <td>30</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- strat content -->

        <!-- end content -->
    </div>
</body>

</html>