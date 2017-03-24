{{ Form::open(array('url' => '/repair/','id'=>'fm')) }}
   <div class="col-lg-10 input-group-lg" >
  <input type="text" autocomplete="on" class="form-control" placeholder="Search your phone, Eg: Iphone 5s" aria-describedby="basic-addon1" id="q" name="q">
    <input type="hidden" class="form-control"  name="i" id="i">

</div>

  <button type="submit" class="btn btn-primary btn-lg" value="submit">Lets Repair !!</button>

{{ Form::close() }}

<script type="text/javascript">

$('#q').autocomplete({

  source:'/getdata/productssearch',
  minlength:2,
  select: function(e, ui)
  {
      $('#i').val(ui.item.id);
      var action=ui.item.id;

      $('#fm').attr("action", "/repair/" + action);
  }

})
</script>