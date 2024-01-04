<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="../resources/css/app.css">
    <title>App</title>
</head>
<body class="flex items-center justify-center min-h-screen  bg-gray-100">
    <div class="m-auto max-w-md">
        <h2 class="font-bold mb-5 font-serif text-center">Login</h2>
        <div class=" w-full bg-white rounded p-5 mb-6">
            <div class="w-full mb-5">
                <label for="name" class="block text-sm text-gray-800">Nome</label>
                <input type="text" id="name" class="inline-block w-64 bg-gray-100 border border-gray-200 rounded shadow-sm text-gray-700 overflow-hidden px-3 my-1.5 py-1.5 focus:outline-none focus:border-blue-200">
            
            </div>
            <div class="mb-5">
                <label for="pwd" class="text-sm text-gray-800">Password</label>
                <input type="text" id="pwd" class="block w-64 bg-gray-100 border border-gray-200 rounded shadow-sm text-gray-700 overflow-hidden px-3 my-1.5 py-1.5 focus:outline-none focus:border-blue-200">
            </div>
            <div class="px-1 mb-3">
                <a href="#" class="text-sm text-gray-400 hover:text-blue-400 hover:underline">Esqueci minha senha</a>
            </div>
            <div class="flex justify-center">
                <button class="bg-blue-500 w-1/2 rounded shadow-sm hover:bg-blue-600 text-white p-1.5">Entrar</button>          
            </div>
        </div>
    </div>
</body>
</html>