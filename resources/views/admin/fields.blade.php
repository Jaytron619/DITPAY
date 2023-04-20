<div class="fields">
    <div class="form-group">
        <label>Svc-No:</label>
        <input class="form-control" type="text" maxlength="6" name="SvnNo" value="{{ old('SvnNo') }}" required>


        <label>UN-No</label>
        <input class="form-control" type="text" name="UnNo" value="{{ old('UnNo') }}" required>
    </div>



    <div class="form-group">
        <label>Surname</label>
        <input class="form-control" type="text" name="Surname" value="{{ old('Surname') }}" required>


        <label>Othernames</label>
        <input class="form-control" type="text" name="Othernames" value="{{ old('Othernames') }}" required>
    </div>



    <div class="form-group">
        <label>Daily Allowance:</label>
        <input class="form-control" type="text" name="DailyAllawa" value="{{ old('DailyAllawa') }}" required>


        <label>Entertainment Allowance:</label>
        <input class="form-control" type="text" name="EntertainmentAllawa" value="{{ old('EntertainmentAllawa') }}" required>
        

        <label>Earned Dollar Debit:</label>
        <input class="form-control" type="text" name="EarnedDollarDebit" value="{{ old('EarnedDollarDebit') }}" required>
    </div>

    <div class="form-group">
        <label>Total Amount:</label>
        <input class="form-control" type="text" name="TotalAmount" value="{{ old('TotalAmount') }}" required>
    </div>

    <div class="form-group">
        <button class="btn" type="submit">Submit</button>
    </div>

</div>
