<?php include('../view/header.php'); ?>
    <head>
        <link rel="stylesheet" href="../view/css/style.css">
        <style>
            @media only screen and (min-width: 375px) {
                td {
                    font-size: 0.9rem;
                }   
            }

            header {
                margin-bottom: 0;
            }

            .edit_vehicles_nav__header {
                padding-top: 20px;
            }

            .edit_vehicles_nav__link {
                font-size: 1rem;
            }

            .add_vehicle__header {
                margin: 30px auto;
                text-align: center;
            }

            .add_vehicle__form {
                border: 1px solid black;
                border-radius: 1px;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                width: 80vw;
                margin: 10px auto;
                min-height: 50vh;
                padding: 30px;
                max-width: 1000px;
            }

            .add_vehicle__input {
                display: flex;
                flex-direction: column;
            }

            .add_vehicle__button {
                margin-top: 10px;
            }

            select, input[type="number"], input[type="text"] {
                border-radius: 1px;
                padding: 3px;
                margin-bottom: 10px;
            }

            .edit_vehicle__form {
                border: 1px solid black;
                border-radius: 5px;
                display: flex;
                flex-direction: column;
                margin: 0 auto;
                padding: 30px;
                max-width: 300px;
            }

            .edit_vehicle_table__td {
                padding: 5px 0;
            }

            .edit_make__input {
                margin: 0 auto;
                max-width: 300px;
            }
            
        </style>
    </head>

<h2>Admin<hr/></h2>