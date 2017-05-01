@extends('layouts.master')

@section('content')
<div id="vue-app">


  <div class="formcenter" >
        <div class="alert alert-info">
          <b>การโดยสารรถแท็กซี่ค่าโดยสารจะเป็นดังนี้</b>
<br>ใช้ข้อมูลอัตราค่าโดยสารที่ประกาศใช้ในช่วงเดือน ธันวาคม พ.ศ. 2557 ได้มีการปรับอัตราค่าโดยสารแท็กซี่ขึ้น โดยอัตราค่าโดยสารใหม่คือ</p>



<ul>
	<li>ระยะทาง 1 กิโลเมตรแรก 35.00 บาท</li>
	<li>ระยะทางเกินกว่า 1 กิโลเมตรถึงกิโลเมตรที่ 10 กิโลเมตรละ 5.50 บาท</li>
	<li>ระยะทางเกินกว่า 10 กิโลเมตรถึงกิโลเมตรที่ 20 กิโลเมตรละ 6.50 บาท</li>
	<li>ระยะทางเกินกว่า 20 กิโลเมตรถึงกิโลเมตรที่ 40 กิโลเมตรละ 7.50 บาท</li>
	<li>ระยะทางเกินกว่า 40 กิโลเมตรถึงกิโลเมตรที่ 60 กิโลเมตรละ 8.00 บาท</li>
	<li>ระยะทางเกินกว่า 60 กิโลเมตรถึงกิโลเมตรที่ 80 กิโลเมตรละ 9.00 บาท</li>
	<li>ระยะทางเกินกว่า 80 กิโลเมตรขึ้นไป กิโลเมตรละ 10.50 บาท</li>
</ul>
<br>
<p>กรณีรถไม่สามารถเคลื่อนที่หรือเดินรถต่อไปได้เกินกว่า 6 กิโลเมตรต่อชั่วโมง อัตรานาทีละ 2.00 บาท</p>

        </div>

	<div class="form-main">
			<div class="form-group">
			    <label >ระยะทาง/กิโลเมตร</label>
			    <input type="text"  v-model="data.km" class="form-control"  placeholder="โปรดระบุ" disabled>
			</div>

			<div class="form-group">
			    <label >เผื่อเวลารถติด/นาที</label>
			    <input type="text" v-model="data.m" class="form-control"   placeholder="โปรดระบุ" disabled>
			</div>

			<div class="form-group has-success">
			    <label >ค่าโดยสาร/บาท</label>
			     <input type="text" class="form-control " placeholder="..." v-model="calculateFare" disabled>
        
			</div>
		</div> <!-- /form-main -->


    </div>
</div>
@endsection


@section('script')
<script>
  var data = <?php echo $resBody; ?>;

    var vjson = new Vue({
        el: '#vue-app',
        data: data,
        computed: {
          calculateFare: function(){
            var reg = /^\d+$/;
            var output = 'only number';
            var km = this.data.km;
            var m = this.data.m;

            if(reg.test(km) && (reg.test(m) || m == ""))
            {
              output = 0;
              if(km <= 1) output = 35;
      			  else if(km <=10) output = 35 + (km-1)*5.5;
      			  else if(km <=20) output = 84.5 + (km-10)*6.5;
      			  else if(km <=40) output = 149.5 + (km-20)*7.5;
      			  else if(km <=60) output = 299.5 + (km-40)*8;
              else if(km <=80) output = 459.5 + (km-60)*9;
      			  else output = 639.5 + (km-80)*10.5;
              output = Math.ceil(output);
              if(output%2 ==0)output+=1;
              output = output + Math.floor(m*2/2)*2;
            }
            return output;
          }
        }
    });
</script>
@endsection
