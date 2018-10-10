<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        
    </head>
    <body>
	
            <div class="content">
                
  <select name="person" id="person">
	@foreach ($persons as $person)
		 <option value="{{ $person->id }}">{{ $person->lastname }}</option> 
	@endforeach
  </select>


<button onclick="myFunction()">Mpike</button>

<script charset="UTF-8">
var person_id;
var a = 'xaxa';
        $(function () {           
            $('#person').on('change', function (e) {
                person_id = e.target.value;
                console.log(person_id);
		//window.alert(person_id)
            });
})

function myFunction() {
    window.alert(' Entrance of id = '+person_id+' on '+Date().toLocaleString());
}
</script>

            </div>
        </div>
    </body>
</html>
