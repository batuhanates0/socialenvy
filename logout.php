<?php

session_start();
unset($_SESSION["login_user"]);






?>
<script src="js/jquery-1.11.0.min.js"></script>


<section id="content">

    <!-- Page Heading -->
    <section class="section page-heading animate-onscroll">




    </section>
    <!-- Page Heading -->






    <!-- Section -->
    <section class="section full-width-bg gray-bg no-margin-top">



        <div class="row">

            <div class="col-lg-9 col-md-9 col-sm-8">





                <div class="col-md-12">

                    <h3 class="animate-scroll no-margin-top">You have successfully logout.</h3>

                    <form id="signup" action="register-login.php" method="post" >
                        <table>
                            <tr>
                                <td><div id="registerMsg" class="alert alert-success">Thanks for using the site.</div></td>
                            </tr>

                        </table>
                    </form>

                </div>

            </div>



        </div>






    </section>
    <!-- /Section -->

</section>

