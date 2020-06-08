

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Appointment System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <style>

            .table-bordered td, .table-bordered th {

                border: 1px solid #dee2e6;

            }
            table.table td, table.table th {

                padding-top: 1.1rem;
                padding-bottom: 1rem;

            }
            .table td, .table th {

                padding: .75rem;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
                vertical-align: top;
                border-top: 1px solid #dee2e6;

            }
            table td {

                font-size: .9rem;
                font-weight: 300;

            }
            .table {


                margin-bottom: 1rem;
                color: #212529;

            }
            .buton{
                width:128px;
                height:36px;


            }
            .color{  
                color:white;
                background-color:#c61c2e;
            }
            .hover button:hover {
                background-color:#c61c2e;
                color:white;
            }
            .gh{

                margin-right: 5px;
            }
            .navv {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                padding-left: 0;
                margin-right: -25px;
                list-style: none;
            }
            .nav-linkk {
                display: block;
                padding: .1rem 1rem;
            }
            .control{
                width:110px;
                height:35px;
            }
         
             .element.style {
                color: #00ffcc;
            }
            .form-search input, .form-inline input, .form-horizontal input, .form-search textarea, .form-inline textarea, .form-horizontal textarea, .form-search select, .form-inline select, .form-horizontal select, .form-search .help-inline, .form-inline .help-inline, .form-horizontal .help-inline, .form-search .uneditable-input, .form-inline .uneditable-input, .form-horizontal .uneditable-input, .form-search .input-prepend, .form-inline .input-prepend, .form-horizontal .input-prepend, .form-search .input-append, .form-inline .input-append, .form-horizontal .input-append {
                display: inline-block;
                *display: inline;
                margin-bottom: 0;
                vertical-align: middle;
                *zoom: 1;
            }
            .form-search input, .form-inline input, .form-horizontal input, .form-search textarea, .form-inline textarea, .form-horizontal textarea, .form-search select, .form-inline select, .form-horizontal select, .form-search .help-inline, .form-inline .help-inline, .form-horizontal .help-inline, .form-search .uneditable-input, .form-inline .uneditable-input, .form-horizontal .uneditable-input, .form-search .input-prepend, .form-inline .input-prepend, .form-horizontal .input-prepend, .form-search .input-append, .form-inline .input-append, .form-horizontal .input-append {
                display: inline-block;
                *display: inline;
                margin-bottom: 0;
                vertical-align: middle;
                *zoom: 1;
            }
            .select {
                width:600px;
                background-color:lightyellow;
                border: 1px solid #cccccc;
                color:black;
            }
            .selectt {
                width:600px;
                height:200px;
                background-color:lightyellow;
                border: 1px solid #cccccc;
                color:black;
            }
            .ff{
                color:#c61c2e;
            }
        </style>
    </head>
    <body>
        <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link " href="<?php echo base_url()?>Welcome">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url()?>Welcome">Service <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Timer <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url()?>Welcome/done">Done <span class="sr-only"></span></a>
                        </li>

                      
                       
                    

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
<!--            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url()?>Welcome">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">Timer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Done</a>
                </li>
            </ul>-->
        </div>

        <div class="container">
          <?php echo $main_content?>
       
       
        </div>  
        
        
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
