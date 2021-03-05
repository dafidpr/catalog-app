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
        data: 'periode',
        render: function(data){
            return '<span>x '+ data +' bln</span>'
        }
    },
    {
        data: 'id',
        sClass: 'text-center',
        width: '100px',
        orderable: false,
        searchable: false,
        render: function(data){
            return '<i class="fe fe-edit px-2 text-primary action" style="cursor: pointer;" data-toggle="edit" data-url="angsuran/edit/'+ data +'"></i> <i class="fe fe-trash-2 px-2 action text-danger" style="cursor: pointer;" data-toggle="delete" data-url="angsuran/destroy/'+data+'"></i>';
        }
    }
];

var displayErrors = [
    {
        display: '#nameErr',
        inputName: 'name'
    },
    {
        display: '#periodeErr',
        inputName: 'periode'
    },
];