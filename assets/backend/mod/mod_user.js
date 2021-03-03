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
        data: 'email',
        name: 'email'
    },
    {
        data: 'username',
        name: 'username'
    },
    {
        data: 'role',
        name: 'role'
    },
    {
        data: 'id',
        sClass: 'text-center',
        width: '100px',
        orderable: false,
        searchable: false,
        render: function(data){
            return '<i class="fe fe-edit px-2 text-primary action" style="cursor: pointer;" data-toggle="edit" data-url="user/edit/'+ data +'"></i> <i class="fe fe-trash-2 px-2 action text-danger" style="cursor: pointer;" data-toggle="delete" data-url="user/destroy/'+data+'"></i>';
        }
    }
];

var displayErrors = [
    {
        display: '#nameErr',
        inputName: 'name'
    },
    {
        display: '#emailErr',
        inputName: 'email'
    },
    {
        display: '#roleErr',
        inputName: 'role'
    },
    {
        display: '#userErr',
        inputName: 'username'
    },
    {
        display: '#passErr',
        inputName: 'password'
    },
    {
        display: '#confirmPassErr',
        inputName: 'confirmPass'
    },
    {
        display: '#confirmPasswordErr',
        inputName: 'confirmPassword'
    },
    {
        display: '#oldPassErr',
        inputName: 'oldPassword'
    },
    {
        display: '#newPassErr',
        inputName: 'newPassword'
    }
];