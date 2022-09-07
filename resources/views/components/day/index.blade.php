
<div class="select">
    {{ Form::label("days", "Dia")}}
    <select name="days" id="id_days">
        @foreach ($days as $day)
            <option value="{{$day->id}}">{{$day->name}}</option>
        @endforeach
    </select>
</div>
    


