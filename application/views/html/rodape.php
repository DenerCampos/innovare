
                        </div><!-- container -->    

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © Innovare Pesquisa - Todos os direitos reservados - 
                    <span class="text-right">
                        <small>Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
                    </span>
                </footer>
                

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

            <!-- jQuery  -->
            <script src="<?php echo base_url("assets/libs/jquery.min.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/popper.min.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/bootstrap.min.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/modernizr.min.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/detect.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/fastclick.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/jquery.slimscroll.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/jquery.blockUI.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/waves.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/jquery.nicescroll.js");?>"></script>
            <script src="<?php echo base_url("assets/libs/jquery.scrollTo.min.js");?>"></script>

            <!-- Jquery UI JS -->
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

            <!-- Chart JS -->
            <script src="<?php echo base_url("assets/plugins/chart.js/chart.min.js");?>"></script>
            <script src="<?php echo base_url("assets/pages/chartjs.init.js");?>"></script>

            <!-- App js -->
            <script src="<?php echo base_url("assets/libs/app.js");?>"></script>

            <!-- Dinamico JS -->
            <?php if(isset($js) && !empty($js)){ ?>
            <script src="<?php echo base_url("assets/js/").$js; ?>"></script>
            <?php } ?>
        
    </body>
</html>