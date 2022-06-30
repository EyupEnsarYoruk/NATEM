<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.phone').mask('00 000 00 00');		
    });
	/*
	Tek input plaka
	function plakaedit(t){
		var regex, v,val;
		val=t.value;
		console.log(val);
		v = val.replace(/\s+/g, '').toUpperCase();
		regex = /^(0[1-9]|[1-7][0-9]|8[01])(([A-Z])(\d{4,5})|([A-Z]{2})(\d{3,4})|([A-Z]{3})(\d{2}))$/;
		return v.match(regex) != null;
		}*/
		
		// Eğer plaka 3 harfliyse sonu en fazla 3 rakam
	$("input[name='plaka2']").on("change",function(){
		
		if($(this).val().length>2){
			$("input[name='plaka3']").attr("maxlength",'3');
		}else{
			$("input[name='plaka3']").attr("maxlength",'4');
		}
	});
</script>
<footer class="row footer flex-shrink-0 py-2 mt-3 m-0">
    <div class="col-12 text-center">
        Copyright atem 2019 - 2029 TümHakları Saklıdır.
    </div>
</footer>

</body>
</html>