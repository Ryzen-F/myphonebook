<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Company Name :</label>
    <input type="text" class="form-control" name="name" id="inputName4" placeholder="Company name"
    value="{{ old('name') ?? $entreprise->name }}">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Phone</label>
    <input type="number" class="form-control" name="phone" id="inputPassword4" placeholder="Phone Number | ex: 07503512XX" value="{{ old('phone') ?? $entreprise->phone }}">
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">Address</label>
  <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St"
  value="{{ old('address') ?? $entreprise->address }}">
</div>
<div class="form-group">
  <label for="inputAddress2">Email</label>
  <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="xxxx@yyy.z"
  value="{{ old('email') ?? $entreprise->email }}">
</div>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="inputCity">City</label>
    <input type="text" class="form-control" name="city" id="inputCity"
    value="{{ old('city') ?? $entreprise->city }}">
  </div>
  <div class="form-group col-md-3">
    <label for="inputZip">Code Postal</label>
    <input type="text" class="form-control" name="postal_code" id="inputZip"
    value="{{ old('postal_code') ?? $entreprise->postal_code }}">
  </div>
</div>