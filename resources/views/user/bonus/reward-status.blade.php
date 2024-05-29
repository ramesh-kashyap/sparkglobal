
<section class="section-transactions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-block">
                    <h2 class="section-title">Reward Profit</h2>
                </div>
                <div class="section-descr">
                    Farming Profit on your account. Track and monitor the movement of your crypto assets.
                </div>
                <div class="s-transactions-block">
                    <div class="row">
                        
                        
                        <style>
                            .transactions-stats-block {
                        margin-top: 64px;
                        border-radius: 40px;
                        box-shadow: 0px 1px 1px 1px #FFF inset;
                        padding: 24px 16px;
                        background: linear-gradient(180deg, rgba(255, 255, 255, 0.14) 0%, rgba(255, 255, 255, 0.00) 100%), rgba(255, 255, 255, 0.30);
                        backdrop-filter: blur(2px);
                        max-width: none;
                        margin-left: auto;
                        margin-right: 0;
                    }
                        </style>
                        <div class="col-12 col-xl-2 d-xl-block">
                            <div class="transactions-stats-block soleyTotalEarningsChart"
                                data-title="Total earnings">








                                <div class="earning-stats-chart-block">
                                    <canvas class="earning-stats-chart"
                                        id="soleyTotalEarningsChartCanvas"></canvas>
                                    <div class="earning-stats-chart-info">
                                        <div class="earning-stats-chart-info__deposit soleyDynamicAmount"
                                            data-active="0" data-value="0.175235" data-plus-minutely="0"
                                            data-balance-mask="$[amount]" data-round="2">
                                            {{ currency() }}
                                            {{ number_format(Auth::user()->totalIncome->sum('comm'), 2) }}
                                        </div>
                                        <div class="earning-stats-chart-info__title">
                                            Total earnings
                                        </div>
                                    </div>
                                </div>
                                <div class="earning-stats-chart-legend-block">
                                    <div class="earning-stats-chart-legend-items">
                                        <div class="earning-stats-chart-legend-item">
                                            <div class="earning-stats-chart-legend-item__line"
                                                style="background-color: rgba(129, 43, 224, 1);">
                                            </div>
                                            <div class="earning-stats-chart-legend-item__content">
                                                <div data-chart-value="0.175235"
                                                    class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                    data-active="0" data-value="0.175235000000"
                                                    data-plus-minutely="0" data-balance-mask="$[amount]"
                                                    data-round="2">
                                                    {{ currency() }}
                                                    {{ number_format(Auth::user()->power_leg, 2) }}
                                                </div>
                                                <div class="earning-stats-chart-legend-item__currency">
                                                    Main Legs</div>
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="earning-stats-chart-legend-item">
                                            <div class="earning-stats-chart-legend-item__line"
                                                style="background-color: rgba(129, 43, 224, 1);">
                                            </div>
                                            <div class="earning-stats-chart-legend-item__content">
                                                <div data-chart-value="0.175235"
                                                    class="soleyTotalEarningsChartDeposits earning-stats-chart-legend-item__deposit soleyDynamicAmount"
                                                    data-active="0" data-value="0.175235000000"
                                                    data-plus-minutely="0" data-balance-mask="$[amount]"
                                                    data-round="2">
                                                    {{ currency() }}
                                                    {{ number_format(Auth::user()->vicker_leg, 2) }}
                                                </div>
                                                <div class="earning-stats-chart-legend-item__currency">
                                                    Other Legs</div>
                                            </div>
                                            
                                           
                                        </div>
                                        
                                    </div>
                                </div>











                            </div>
                        </div>
                        <div class="col-12 col-lg-10 col-xl-8 offset-0 offset-lg-1 offset-xl-0">
                            <div class="transactions-block">

                              


                                <div class="transaction-items-block">
                                    <div class="transaction-items" style="overflow-x: auto;">
                                   
                                   <table style="font-family: system-ui;" class="table table-head-bg-success"> 
                                <thead>
                                    <tr>
                                    
                                        <th>Rank </th>
                                        <th>Required Business</th>
        
                                        <th>Bonus</th>
                                        <!--<th>Commission</th>-->
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
        
                                    <?php
                                    
                                    if ($first_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($second_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                            $active = '';
                                        } else {
                                            $color = '#74d28c !important ';
                                            $active = '( Active )';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>STAR</td>
                                        <td>{{currency()}} 1000</td>
        
        
                                        <td>{{currency()}} 30</td>
                                        <td><?= @$status ?></td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($second_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($third_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                     
        
        
                                        <td>RED STAR</td>
                                        <td>{{currency()}} 2500</td>
        
                                        <td>{{currency()}} 75</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
        
        
                                    <?php
                                    
                                    if ($third_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($four_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                     
        
                                        <td>BLUE STAR</td>
                                        <td>{{currency()}} 5000</td>
        
                                        <td>{{currency()}} 150</td>
                                        <td><?= @$status ?></td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($four_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($five_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                       
        
                                        <td>SILVER STAR</td>
                                        <td>{{currency()}} 10000</td>
        
                                        <td>{{currency()}} 300</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
                                    <?php
                                    
                                    if ($five_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($six_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                        
        
                                        <td>PEARL STAR</td>
                                        <td>{{currency()}} 20000</td>
        
                                        <td>{{currency()}} 600</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($six_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($seven_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                       
        
                                        <td>GOLD STAR</td>
                                        <td>{{currency()}} 50000</td>
        
                                        <td>{{currency()}} 1500</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($seven_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($eight_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>PLATINUM STAR</td>
                                        <td>{{currency()}} 100000</td>
        
                                        <td>{{currency()}} 3000 </td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($eight_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($nine_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>RUBY</td>
                                        <td>{{currency()}} 200000</td>
        
                                        <td>{{currency()}} 6000</td>
                                        <td><?= @$status ?></td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($nine_lvl > 0) {
                                        $status = 'Achieved';
                                        if ($ten_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>EMMERALD</td>
                                        <td>{{currency()}} 500000</td>
        
                                        <td>{{currency()}} 15000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
        
        
                                    <?php
                                    
                                    if ($ten_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($eleven_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>SAPPHIRE</td>
                                        <td>{{currency()}} 1000000</td>
        
                                        <td>{{currency()}} 30000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                            
                                  <?php
                                    
                                    if ($eleven_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($twel_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>DIAMOND</td>
                                        <td>{{currency()}} 2000000</td>
        
                                        <td>{{currency()}} 60000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                    
                                       <?php
                                    
                                    if ($twel_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($thirteen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>WHITE DIAMOND</td>
                                        <td>{{currency()}} 5000000</td>
        
                                        <td>{{currency()}} 150000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                        <?php
                                    
                                    if ($thirteen_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($fourteen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>BLACK DIAMOND</td>
                                        <td>{{currency()}} 10000000</td>
        
                                        <td>{{currency()}} 300000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                    
                                       <?php
                                    
                                    if ($fourteen_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($fifteen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>CROWN DIAMOND</td>
                                        <td>{{currency()}} 20000000</td>
        
                                        <td>{{currency()}} 600000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                         <?php
                                    
                                    if ($fifteen_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($sixteen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>ROYAL DIAMOND</td>
                                        <td>{{currency()}} 50000000</td>
        
                                        <td>{{currency()}} 1500000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                          <?php
                                    
                                    if ($sixteen_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($seventeen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>AMBASSADOR</td>
                                        <td>{{currency()}} 100000000</td>
        
                                        <td>{{currency()}} 3000000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                    
                                       <?php
                                    
                                    if ($seventeen_lvl > 0) {
                                        $status = 'Achieved';
                                       if ($eighteen_lvl > 0) {
                                            $color = 'rgb(251, 189, 24)';
                                        } else {
                                            $color = '#74d28c !important ';
                                        }
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>CROWN AMBASSADOR</td>
                                        <td>{{currency()}} 200000000</td>
        
                                        <td>{{currency()}} 6000000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                    
                                    
                                       <?php
                                    
                                    if ($eighteen_lvl > 0) {
                                        $status = 'Achieved';
                                    
                                    } else {
                                        $status = 'Pending';
                                        $color = 'none';
                                    }
                                    
                                    ?>
                                    <tr style="background:<?= @$color ?>;color: #4b3535
            font-weight: 600;">
                                      
        
                                        <td>ROYAL AMBASSADOR</td>
                                        <td>{{currency()}} 500000000</td>
        
                                        <td>{{currency()}} 15000000</td>
                                        <td><?= @$status ?> </td>
        
        
                                    </tr>
                                    
                                    
        
                                </tbody>
                            </table>

                                    </div>
                                    <div class="pagination-block">

                                    
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-lg-10 col-xl-2 offset-0 offset-lg-1 offset-xl-0">
                            <div class="deposits-help-block">
                                <div class="deposits-help">
                                    <div class="deposits-help-top">
                                        <div class="deposits-help-icon"></div>
                                        <div class="deposits-help-content">
                                            <div class="deposits-help-title">
                                                Any questions?
                                            </div>
                                            <div class="deposits-help-descr">
                                                Visit Soley Help center now, and you will find proper answers.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="deposits-help-btn-block">
                                        <a href="/help-center/" class="deposits-help-btn purple-btn">
                                            Help center
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
