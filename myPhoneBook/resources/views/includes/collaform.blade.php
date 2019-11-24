<div class="form-row">
  <div class="form-group col-md-3">
    <label for="inputCivility4">Civility:</label>
    <input type="text" class="form-control" name="civility" id="inputCivility4" placeholder="Homme/Femme/Non-Binaire/autres" value="{{ old('civility') ?? $collaborateur->civility }}">
  </div>
  <div class="form-group col-md-3">
      <label for="inputEmail4">Last Name:</label>
      <input type="text" class="form-control" name="last_name" id="inputName4" placeholder="Last name" value="{{ old('last_name') ?? $collaborateur->last_name }}">
  </div>
  <div class="form-group col-md-3">
      <label for="inputEmail4">First Name:</label>
      <input type="text" class="form-control" name="first_name" id="inputName4" placeholder="First name" value="{{ old('first_name') ?? $collaborateur->first_name }}">
  </div>
  <div class="form-group col-md-3">
    <label for="example-tel-input">Phone</label>
    <input type="number" class="form-control" name="phone" id="example-tel-input" placeholder="Phone Number | ex: 07503512XX" value="{{ old('phone') ?? $collaborateur->phone }}">
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">Address</label>
  <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" value="{{ old('address') ?? $collaborateur->address }}">
</div>
<div class="form-group">
  <label for="inputAddress2">Email</label>
  <input type="text" class="form-control" name="email" id="inputAddress2" placeholder="xxxx@yyy.z" value="{{ old('email') ?? $collaborateur->email }}">
</div>
<div class="form-row">
  <div class="form-group col-md-5">
    <label for="inputCity">City</label>
    <input type="text" class="form-control" name="city" id="inputCity" value="{{ old('city') ?? $collaborateur->city }}">
  </div>
  <div class="form-group col-md-3">
    <label for="inputZip">Code Postal</label>
    <input type="text" class="form-control" name="postal_code" id="inputZip" value="{{ old('postal_code') ?? $collaborateur->postal_code }}">
  </div>
  <div class="form-group col-md-3">
      <label for="inputCity">Company Name</label>
      <input type="text" class="form-control" name="company_name" id="inputCity" value="{{ old('company_name') ?? $collaborateur->company_name }}">
    </div>
  </div>