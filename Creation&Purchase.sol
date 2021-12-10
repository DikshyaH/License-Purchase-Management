pragma solidity >=0.4.21 <0.6.2;

contract LicenseTrack {
    string public name;
    uint public licenses_count = 0 ;
    mapping(uint => License) public licenses;

     struct License{
       uint id;
       string activation_code;
       uint expiry_date_time;
       address payable license_owner;
       bool active_status;
       uint price_tag;
    }
     
    event LicenseCreated(
       uint id,
       string activation_code,
       uint expiry_date_time,
       address payable license_owner,
       bool active_status,
       uint price_tag
    );
    
    event LicensePurchased(
       uint id,
       string activation_code,
       uint expiry_date_time,
       address payable license_owner,
       bool active_status,
       uint price_tag
    );
    constructor() public {
        name = "License Tracking System";
    }

    function createLicense(uint _expiry_date_time ,string memory _activation_code, uint _price_tag) public{
    //Make sure paramters are correct
    // Check for expiry_date_time
    require(_expiry_date_time > 0);
    //require a valid activation code
     require(bytes(_activation_code).length > 0);
    // Require valid price 
    require(_price_tag > 0);
    //Increment license count
    licenses_count++;
    // Create the license
    licenses[licenses_count] = License(licenses_count, _activation_code, _expiry_date_time,msg.sender, false,_price_tag);
    //Trigger an event
    emit LicenseCreated(licenses_count,_activation_code,_expiry_date_time,msg.sender,false,_price_tag);
    
    }

    function purchaseLicense(uint _id) public payable{
        //Fetch the license
        License memory _license = licenses[_id]; 
        //Fetch the price
        //License memory _price = licenses[_price_tag];
        //Make sure the license is valid
        //Give ownership
        address payable _new_license_owner = _license.license_owner;
        _license.license_owner = msg.sender;
        //Purchase it
        _license.active_status = true;
        //Updating the product
        licenses[_id] = _license;
        //Pay the seller by sending them Ether
        _new_license_owner.transfer(msg.value);
        //Trigger an event
        //emit LicensePurchased();
        emit LicensePurchased(licenses_count,_license.activation_code,_license.expiry_date_time,msg.sender,true,_license.price_tag);
    }
}