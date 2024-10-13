<style>
    .container {
        margin: 20px auto;
        padding: 15px 10px;
        border: 1px grey solid;
        border-radius: 5px;
        max-width: 600px;
        overflow-wrap: break-word;
    }
    .container h1 {
        font-size: 1.7em;
        text-align: center;
        line-height: 2em;
    }
    .container p {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1em;
        line-height: 1.2em;
        color: rgb(41, 44, 46);
        margin: 10px 5px;
    }

</style>
<div class="container">
    <h1>Mesaj contact Omiro Tools</h1>

    <p>Email: {{ $data['email'] }} </p>
    <p>Nume: {{ $data['name'] }}   </p>
    <p>Phone: {{ $data['phone'] }}   </p>
    <p>Subiect: {{ $data['subject'] }} </P>
    <p>Mesaj: {{ $data['message'] }} </p>

</div>
