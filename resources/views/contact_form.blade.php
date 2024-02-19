<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="{{ asset('css/contact.css') }}" rel="stylesheet">

</head>
<body>


<div class="form">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card border post p-3 shadow p-3 mb-5 bg-body-tertiary rounded"><h2>Форма обратной связи</h2>
                    <div class="card-body rounded">
                        <form id="contactForm" enctype="post">
                            @csrf
                            <div class="mb-3">
                    <label for="name"></label>
                                <input type="text" name="name" class="form-control p-3" placeholder="Введите Ф.И.О." id="name" required autofocus>

                            </div>


                            <div class="mb-3">
                                <label for="address"></label><input type="text" name="address" class="form-control" placeholder="Введите адрес" id="address" required>
                            </div>

                            <div class="mb-3">
                                <label for="mobile_number"></label><input type="text"
                                                                          name="mobile_number"
                                                                          class="form-control"
                                                                          placeholder="+7(___)___-__-__"

                                                                          id="mobile_number" required>
                            </div>

                            <div class="mb-3">
                                <label for="email"></label><input type="email"
                                                                  name="email"
                                                                  class="form-control"
                                                                  placeholder="Введите e-mail"
                                                                  id="email"
                                                                  required>
                            </div>
                            <div class="form-group mx-auto text-center">
                                <button class="btn mt-3  mx-auto p-3" id="submit" onclick="">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="table-wrap">
        <div>
            <table id="table" class="p-3 shadow p-3 mb-5 bg-body-tertiary rounded">
                <thead>
            <tr>
                <th>ФИО</th>
                <th>Адрес</th>
                <th>Телефон</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td data-label="ФИО:">{{$contact->name}}</td>
                    <td data-label="Адрес:">{{$contact->address}}</td>
                    <td data-label="Телефон:">{{$contact->mobile_number}}</td>
                    <td data-label="E-mail:">{{$contact->email}}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


<script src="https://unpkg.com/imask"></script>


<script>

    $('#contactForm').on('submit',function(event){
        event.preventDefault();

        let name = $('#name').val();
        let address = $('#address').val();
        let mobile_number = $('#mobile_number').val();
        let email = $('#email').val();

        let node1 = document.createElement('td');
        let node2 = document.createElement('td');
        let node3 = document.createElement('td');
        let node4 = document.createElement('td');


        $.ajax({
            url: "/contact-form",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                name:name,
                address:address,
                email:email,
                mobile_number:mobile_number,

            },
            success:function(html){
                let nodet = document.createElement('tr');
                document.getElementById('table').appendChild(nodet);

                node1.innerHTML = name;
                node2.innerHTML = address;
                node3.innerHTML = mobile_number;
                node4.innerHTML = email;

                nodet.appendChild(node1);
                nodet.appendChild(node2);
                nodet.appendChild(node3);
                nodet.appendChild(node4);

            },
        });
    });


    const element = document.getElementById('mobile_number');
    const maskOptions = {
        mask: '+{7}(000)000-00-00',
        lazy: true,
    };
    const mask = IMask(element, maskOptions);

</script>
</body>
</html>
