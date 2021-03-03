var dataColumns = [{
		data: 'no',
		width: '1%',
		name: 'no'
	},
	{
		data: 'groups',
		name: 'groups'
	},
	{
		data: 'meta_key',
		name: 'meta_key'
	},
	{
		data: 'meta_value',
		name: 'meta_value'
	},
	{
		data: 'id',
		sClass: 'text-center',
		width: '100px',
		orderable: false,
		searchable: false,
		render: function (data) {
			return '<i class="fe fe-edit px-2 text-primary action" style="cursor: pointer;" data-toggle="edit" data-url="settings/edit/' + data + '"></i> <i class="fe fe-trash-2 px-2 action text-danger" style="cursor: pointer;" data-toggle="delete" data-url="settings/destroy/' + data + '"></i>';
		}
	}
];

$('#metaValueType').change(function () {
	let metaValueType = "";
	$("select option:selected").each(function () {
		metaValueType += $(this).val();
	});
	if (metaValueType == 'general') {
		$("#metaValue").remove();
		$('#form-group').append(`
				<textarea class="form-control" name="metaValue" id="metaValue"
				placeholder="Meta Value"></textarea>
		`);
	} else if (metaValueType == 'image') {
		$("#metaValue").remove();
		$('#form-group').append(`
				<input type="file" class="form-control-file" name="metaValue" id="metaValue">
		`);
	}
});

var displayErrors = [{
		display: '#metaKeyErr',
		inputName: 'metaKey'
	},
	{
		display: '#metaValueErr',
		inputName: 'metaValue'
	}
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