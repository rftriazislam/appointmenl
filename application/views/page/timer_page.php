        
<div class="container">
    <h5 style="color:#c61c2e;" >ALL TIME SELECT </h5>
    <br>


</div>
<div style="width:100%;height:790px;">
    <?php
    $d = strtotime("today");
    $da = date("Y-m", $d);
    $y_m = $da; // set year and month.
    $d = date('d', strtotime('last day of this month', strtotime($y_m))); // get max date of current month: 28, 29, 30 or 31.
    for ($i = 1; $i <= $d; $i++) {
        $j = $y_m . '-' . str_pad($i, 2, '0', STR_PAD_LEFT);
        foreach ($time as $t_time) {
            $input = $t_time->date_name;

            $timer_1 = $t_time->timer_1;
            $timer_2 = $t_time->timer_2;
            $timer_3 = $t_time->timer_3;
            $timer_4 = $t_time->timer_4;
            $timer_5 = $t_time->timer_5;
            $timer_6 = $t_time->timer_6;
            $timer_7 = $t_time->timer_7;
            $timer_8 = $t_time->timer_8;
            $id = $t_time->date_id;
            ?>
            <?php
            if ($input == $j) {

                $date = strtotime($j);
                $dat = date('d', $date); //date ber kora jai $date=date('Y-m-d',$date)
                $str = date('D,M', $date); //month name ber kora jai $month=date('D-M-Y',$date)


                $pub = $t_time->date_over;
                if ($pub == 0) {
                    ?>

                    <ul class="navv flex-column float-left">

                        <a class="nav-link active" ><button class="buton color"><b><?php echo $str . ' ' . $dat ?></b></button></a>
                    <?php
                    if ($timer_1 == 0 || $id == NULL) {
                        ?>

                        <?php } else { ?>
                            <li class="nav-item hover">
                              
                                    <a class="nav-linkk active" ><button class="buton nav-linkk"><i class="far fa-circle gh"></i>
                            <?php
                            $ex_time = $t_time->timer_1;
                            $timestamp = strtotime($t_time->timer_1);
                            $new_date_format = date('h:i', $timestamp);
                            $con_time = 12.00;
                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                echo $new_date_format . ' pm';
                            } else {
                                echo $ex_time . ' am';
                            }
                            ?>
                                        </button></a>
                                   
                                
                            </li>
                    <?php
                }
                if ($timer_2 == 0 || $id == NULL) {
                    ?>

                        <?php } else { ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i>
                            <?php
                            $ex_time = $t_time->timer_2;
                            $timestamp = strtotime($t_time->timer_2);
                            $new_date_format = date('h:i', $timestamp);
                            $con_time = 12.00;
                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                echo $new_date_format . ' pm';
                            } else {
                                echo $ex_time . ' am';
                            }
                            ?>
                                        </button></a>
                                    
                            </li>
                    <?php
                }
                if ($timer_3 == 0 || $id == NULL) {
                    ?>

                        <?php } else { ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i>
                    <?php
                    $ex_time = $t_time->timer_3;
                    $timestamp = strtotime($t_time->timer_3);
                    $new_date_format = date('h:i', $timestamp);
                    $con_time = 12.00;
                    if ($ex_time > $con_time || $ex_time == $con_time) {
                        echo $new_date_format . ' pm';
                    } else {
                        echo $ex_time . ' am';
                    }
                    ?>
                                        </button></a>
                                   
                            </li>
                    <?php
                }
                if ($timer_4 == 0 || $id == NULL) {
                    ?>

                        <?php } else {
                            ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i>
                    <?php
                    $ex_time = $t_time->timer_4;
                    $timestamp = strtotime($t_time->timer_4);
                    $new_date_format = date('h:i', $timestamp);
                    $con_time = 12.00;
                    if ($ex_time > $con_time || $ex_time == $con_time) {
                        echo $new_date_format . ' pm';
                    } else {
                        echo $ex_time . ' am';
                    }
                    ?>
                                        </button></a>
                                    
                            </li>
                            <?php
                        }
                        if ($timer_5 == 0 || $id == NULL) {
                            ?>

                        <?php } else {
                            ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_5;
                                            $timestamp = strtotime($t_time->timer_5);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                    </button></a>
                            </li>
                            <?php
                        }
                        if ($timer_6 == 0 || $id == NULL) {
                            ?>

                        <?php } else {
                            ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_6;
                                            $timestamp = strtotime($t_time->timer_6);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    
                            </li>
                            <?php
                        }
                        if ($timer_7 == 0 || $id == NULL) {
                            
                        } else {
                            ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_7;
                                            $timestamp = strtotime($t_time->timer_7);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                  
                            </li>
                            <?php
                        }
                        if ($timer_8 == 0 || $id == NULL) {
                            ?>

                <?php } else {
                    ?>
                            <li class="nav-item hover">
                                    <a class="nav-linkk active" ><button class="buton"><i class="far fa-circle gh"></i><?php
                                            $ex_time = $t_time->timer_8;
                                            $timestamp = strtotime($t_time->timer_8);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?></button></a>
                              
                            </li>
                    <?php } ?>
                    </ul>
                    <?php
                } else {
                    ?>
                    <ul class="navv flex-column float-left">

                        <a class="nav-link active" ><button class="buton color"><b><?php echo $str . ' ' . $dat ?></b></button></a>
                        <?php
                        if ($timer_1 == 0 || $id == NULL) {
                            ?>

                <?php } else { ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" ><button class="buton nav-linkk"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_1;
                                            $timestamp = strtotime($t_time->timer_1);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_1; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                            <?php
                        }
                        if ($timer_2 == 0 || $id == NULL) {
                            ?>

                                        <?php } else { ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_2;
                                            $timestamp = strtotime($t_time->timer_2);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_2; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                            <?php
                        }
                        if ($timer_3 == 0 || $id == NULL) {
                            ?>

                                        <?php } else { ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_3;
                                            $timestamp = strtotime($t_time->timer_3);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_3; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                            <?php
                        }
                        if ($timer_4 == 0 || $id == NULL) {
                            ?>

                                        <?php } else {
                                            ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_4;
                                            $timestamp = strtotime($t_time->timer_4);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_4; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                            <?php
                        }
                        if ($timer_5 == 0 || $id == NULL) {
                            ?>

                                        <?php } else {
                                            ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_5;
                                            $timestamp = strtotime($t_time->timer_5);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_5; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                    <?php
                }
                if ($timer_6 == 0 || $id == NULL) {
                    ?>

                                        <?php } else {
                                            ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_6;
                                            $timestamp = strtotime($t_time->timer_6);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_6; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                                            <?php
                                        }
                                        if ($timer_7 == 0 || $id == NULL) {
                                            
                                        } else {
                                            ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i>
                                            <?php
                                            $ex_time = $t_time->timer_7;
                                            $timestamp = strtotime($t_time->timer_7);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?>
                                        </button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_7; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                                            <?php
                                        }
                                        if ($timer_8 == 0 || $id == NULL) {
                                            ?>

                                        <?php } else {
                                            ?>
                            <li class="nav-item hover">
                                <form action="<?php echo base_url() ?>Welcome/details/<?php echo $t_time->date_id ?>" method="post">
                                    <a class="nav-linkk active" href="<?php echo base_url() ?>Welcome/details"><button class="buton"><i class="far fa-circle gh"></i><?php
                                            $ex_time = $t_time->timer_8;
                                            $timestamp = strtotime($t_time->timer_8);
                                            $new_date_format = date('h:i', $timestamp);
                                            $con_time = 12.00;
                                            if ($ex_time > $con_time || $ex_time == $con_time) {
                                                echo $new_date_format . ' pm';
                                            } else {
                                                echo $ex_time . ' am';
                                            }
                                            ?></button></a>
                                    <input class="gh" type="hidden" value="<?php echo $location; ?>" name="location" >
                                    <input class="gh" type="hidden" value="<?php echo $t_time->timer_8; ?>" name="time" >
                                    <input class="gh" type="hidden" value="<?php echo $input ?>" name="date" >
                                </form>
                            </li>
                <?php } ?>
                    </ul>

                <?php
            }
        }
    }
}
?>


</div>













