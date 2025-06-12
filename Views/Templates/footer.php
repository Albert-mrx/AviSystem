    </section>
    <div id="overlay" class="fixed inset-0 bg-black/15 bg-opacity-50 z-40 hidden md:hidden"></div>



    </main>
    <script src="node_modules/flyonui/flyonui.js"></script>
    <script src="<?php echo base_url;?>/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url;?>/node_modules/datatables.net/js/dataTables.min.js"></script>
    <script src="<?php echo base_url;?>/node_modules/fullcalendar/index.global.js"></script>
    <script src="<?php echo base_url;?>/node_modules/@fullcalendar/core/locales-all.global.min.js"></script>
    <script src="<?php echo base_url;?>assets/js/chartjs.js"></script>
    <script src="<?php echo base_url;?>assets/js/chartjsadmin.js"></script>
    <script src="<?php echo base_url;?>assets/js/datatable.js"></script>
    <script src="<?php echo base_url;?>assets/js/fullcalendar.js"></script>
    <script src="<?php echo base_url;?>assets/js/calendar.js"></script>

    <script src="<?php echo base_url;?>assets/js/alerts.js"></script>
    <script src="<?php echo base_url;?>assets/js/toggle.js"></script>
    <script src="<?php echo base_url;?>assets/js/funciones.js"></script>
    <script>
    function setCursorToStart(el) {
        // Solo si hay texto, reposiciona el cursor
        if (el.setSelectionRange) {
            el.setSelectionRange(0, 0);
        } else if (el.createTextRange) {
            var range = el.createTextRange();
            range.moveStart('character', 0);
            range.select();
        }
    }
</script>
</body>
