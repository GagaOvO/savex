<!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>{{ config('app.name') }} <br>&copy; 
        <script>document.write(new Date().getFullYear())</script></small>
      </p>
    </div>
  </footer>
  <
  <!-- footer -->
  <script src="./assets/back_assets/js/jquery.min.js"></script>
   <!-- datepicker -->
  <script src="./assets/back_assets/js/datepicker/bootstrap-datepicker.js"></script>
  <script src="./assets/back_assets/js/app.plugin.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});

</script>
    <script type="text/javascript">
    $(document).ready(function () {
  var navListItems = $('div.setup-panel1 div a'),
          allWells = $('.setup-content1'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content1"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel1 div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel1 div a.btn-primary').trigger('click');
});
  </script>
  </script>
  <!-- Bootstrap -->
  <script src="./assets/back_assets/js/bootstrap.js"></script>
  <script src="./assets/back_assets/js/bootstrap-fileupload.min.js"></script>
  <!-- App -->
  <script src="./assets/back_assets/js/app.js"></script>  
  <script src="./assets/back_assets/js/slimscroll/jquery.slimscroll.min.js"></script>
</body>
</html>