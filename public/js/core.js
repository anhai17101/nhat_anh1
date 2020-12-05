$(document).ready(function () {
    $('#sreach').keyup(function (){

        var text = $(this).val();
        alert('11');
        // $.ajax({
        //     url:"{{ route('search') }}",
        //     type:"POST",
        //     dataType: 'html',
        //     data:{ _token: "{{ csrf_token() }}"},
        //     success:function (data){
        //         console.log(data);
        //     }
        // })
    });
})
