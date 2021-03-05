var dataColumns = [
    {
        data: 'no',
        width: '1%',
        name: 'no'
    },
    {
        data: 'image',
        render: function(data){
            return '<img src="'+ base_url +'assets/backend/img/slider/'+data+'" alt="" width="50%">';
        }
    },
    {
        data: 'title',
        name: 'title'
    },
    {
        data: 'subtitle',
        name: 'subtitle'
    },
    {
        data: 'id',
        sClass: 'text-center',
        width: '100px',
        orderable: false,
        searchable: false,
        render: function(data){
            return '<i class="fe fe-edit px-2 text-primary action" style="cursor: pointer;" data-toggle="edit" data-url="slider/edit/'+ data +'"></i> <i class="fe fe-trash-2 px-2 action text-danger" style="cursor: pointer;" data-toggle="delete" data-url="slider/destroy/'+data+'"></i>';
        }
    }
];

var displayErrors = [
    {
        display: '#titleErr',
        inputName: 'title'
    },
    {
        display: '#subtitleErr',
        inputName: 'subtitle'
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