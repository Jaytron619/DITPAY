<div class="fields">
    <input type="hidden" name="id" value="{{ $data->id }}" required>

    <div class="form-group">
        <label>Svc-No:</label>
        <input class="form-control" type="text" maxlength="6" name="SvnNo" value="{{ $data->SvnNo }}" required>

        <label>UN-No</label>
        <input class="form-control" type="text" name="UnNo" value="{{ $data->UnNo }}" required>
    </div>

    <div class="form-group">
        <label>Surname</label>
        <input class="form-control" type="text" name="Surname" value="{{ $data->Surname }}" required>


        <label>Othernames</label>
        <input class="form-control" type="text" name="Othernames" value="{{ $data->Othernames }}" required>
    </div>

    <div class="form-group">
        <label>Daily Allowance:</label>
        <input class="form-control" type="text" name="DailyAllawa" value="{{ $data->DailyAllawa }}" required>

        <label>Entertainment Allowance:</label>
        <input class="form-control" type="text" name="EntertainmentAllawa" value="{{ $data->EntertainmentAllawa }}"
            required>

        <label>Earned Dollar Debit:</label>
        <input class="form-control" type="text" name="EarnedDollarDebit" value="{{ $data->EarnedDollarDebit }}"
            required>
    </div>

    <div class="form-group">
        <label>Total Amount:</label>
        <input class="form-control" type="text" name="TotalAmount" value="{{ $data->TotalAmount }}" required>
    </div>

    <div class="form-group">
        <button class="btn" type="submit">Update</button>
    </div>
</div>
