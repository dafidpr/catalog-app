var dataColumns = [
    {
        data: 'no',
        width: '1%',
        name: 'no'
    },
    {
        data: 'name',
        name: 'name'
    },
    {
        data: 'police_number',
        name: 'police_number'
    },
    {
        data: 'type',
        name: 'type'
    },
    {
        data: 'year',
        name: 'year'
    },
    {
        data: 'color',
        name: 'color'
    },
    {
        data: 'cc',
        name: 'cc'
    },
    {
        data: 'price',
        render:function(data){
            return 'Rp. ' + new Intl.NumberFormat('in-IN', { maximumSignificantDigits: 3 }).format(data)
        }
    },
    {
        data: 'sold',
        render: function(data){
            if(data == 'Y'){
                return '<span class="badge badge-danger">Soldout</span>'
            } else {
                return '<span class="badge badge-success">Available</span>'
            }
        }
    },
    {
        data: 'id',
        sClass: 'text-center',
        width: '100px',
        orderable: false,
        searchable: false,
        render: function(data){
            return '<a href="product/picture/'+ data +'" class="text-decoration-none"><i class="fe fe-camera px-2 text-success"></i></a><i class="fe fe-edit px-2 text-primary action" style="cursor: pointer;" data-toggle="edit" data-url="product/edit/'+ data +'"></i> <i class="fe fe-trash-2 px-2 action text-danger" style="cursor: pointer;" data-toggle="delete" data-url="product/destroy/'+data+'"></i>';
        }
    }
];

var displayErrors = [
    {
        display: '#nameErr',
        inputName: 'name'
    },
    {
        display: '#typeErr',
        inputName: 'type'
    },
    {
        display: '#police_numberErr',
        inputName: 'police_number'
    },
    {
        display: '#colorErr',
        inputName: 'color'
    },
    {
        display: '#merkErr',
        inputName: 'merk'
    },
    {
        display: '#yearErr',
        inputName: 'year'
    },
    {
        display: '#ccErr',
        inputName: 'cc'
    },
    {
        display: '#fuelErr',
        inputName: 'fuel'
    },
    {
        display: '#transmissionErr',
        inputName: 'transmission'
    },
    {
        display: '#mileageErr',
        inputName: 'mileage'
    },
    {
        display: '#conditionErr',
        inputName: 'condition'
    },
    {
        display: '#priceErr',
        inputName: 'price'
    },
    {
        display: '#minimal_dpErr',
        inputName: 'minimal_dp'
    },
    {
        display: '#soldErr',
        inputName: 'sold'
    },
];
$('.imgChange').change(function(){
	imgPreview(this);
})

function imgPreview(input){
	if(input.files && input.files[0]){
		var reader = new FileReader();

		reader.onload = function(e){
			$('.imgPreview').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
}