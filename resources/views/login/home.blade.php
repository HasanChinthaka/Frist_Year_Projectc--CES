@extends('layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Dashboard</div>
        <div class="card-body"> 
           <h2>Product Section</h2>
                <label for="brick">Brick Type :</label>
                <select name="brick" id="brick" class="form-control">
                    <option value="eBrick">Engineering Brick</option>
                    <option value="cBrick">Cement Brick</option>
                </select></br>

                <label for="steel">Steel :</label>
                <select name="steel" id="steel" class="form-control">
                    <option value="lanwa">Lanwa</option>
                    <option value="melwa">Melwa</option>
                </select></br>

                <label for="cement">Cement :</label>
                <select name="cement" id="cement" class="form-control"> 
                    <option value="tokyo">Tokyo Cement</option>
                    <option value="sanstha">Sanstha Cement</option>
                    <option value="ultratech">Ultratech Cement</option>
                </select></br>

                <label for="paint">Paint :</label>
                <select name="paint" id="paint" class="form-control"> </br>
                    <option value="nippon">Nippon Paint</option>
                    <option value="dulux">Dulux Paint</option>
                    <option value="robbialac">Robbialac Paint</option>
                    <option value="multilac">Multilac Paint</option>
                </select></br>

           <h2>Calculation Section</h2>
                <label for="workId">Work ID :</label>
                <input type="text" name="workId" id="workId" class="form-control"> </br>
                
                <label for="foundation">Volume of The Foundation :</label>
                <input type="number" name="foundation" id="foundation" class="form-control"></br>

                <label for="areaWall">Area of The Wall :</label>
                <input type="number" name="areaWall" id="areaWall" class="form-control"></br>

                <label for="areaWall">Area of The Floor :</label>
                <input type="number" name="areaWall" id="areaWall" class="form-control"></br>

                <label for="areaRoof">Area of The Roof :</label>
                <input type="number" name="areaRoof" id="areaRoof" class="form-control"></br>

                <label for="mainDoor">Size of The Main Door :</label>
                <input type="number" name="mainDoor" id="mainDoor" class="form-control"></br>

                <label for="roomDoor">Size of The Room Door :</label>
                <input type="number" name="roomDoor" id="roomDoor" class="form-control">
                <input type="number" placeholder="Enter Number of Room Doors" name="doorQty" id="doorQty" class="form-control"></br>

                <label for="window">Size of The Window :</label>
                <input type="number" name="window" id="window" class="form-control">
                <input type="number" placeholder="Enter Number of Windows" name="windowQty" id="windowQty" class="form-control"></br>

        </div>
    </div>

@stop