import './bootstrap';

fetch("https://driver-vehicle-licensing.api.gov.uk/driver-find")
    .then(response =>console.log(response))
    .catch(error => console.log(error))


