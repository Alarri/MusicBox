

<script type="text/javascript">
    function none(){
    document.getElementById('show1').style.display = 'none';}
    function hide(){
    document.getElementById('show').style.display = 'none';}
    
    </script>
    


{{ Form::open(array('url' => 'files', 'role' => 'form', 'enctype' => 'multipart/form-data')) }}
	{{ Form::label('name', 'Name:')}}
    {{ Form::text('name', '')}}<br><br>
    {{ Form::label('track', 'Select:')}}
    {{ Form::file('track', '')}} <br><br>

    <div id ='show'>
        <input class="field" name="agree" type="checkbox" value="0" onclick="none()">
        {{ Form::label('parts', 'Parts:')}}
        {{ Form::text('parts', '0')}}<br><br>
    </div>

    

    <div id= 'show1'>
        <input class="field" name="agree" type="checkbox" value="0" onclick="hide()">
        {{ Form::label('minutes', 'Minutes:')}}
        {{ Form::text('minutes', '0')}}<br><br>
    </div>
    
   
    {{ Form::submit('Upload', array('id' => 'submit'))}}
	{{ Form::button('Dowdload', array('id' => 'button'))}}
	{{ Form::close() }}