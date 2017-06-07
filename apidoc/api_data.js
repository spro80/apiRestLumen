define({ "api": [
  {
    "type": "post",
    "url": "/usuario",
    "title": "",
    "name": "createUsuario",
    "description": "<p>Create Usuario</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -i -X POST -H \"Content-Type:application/json\" http://localhost:8083/api/sistema/usuario -d '{\"id_usuario\":\"13745275\", \"id_tipo_cliente\":1, \"rut_completo_usuario\":\"137452758\", \"password_usuario\":\"123456\", \"digito_rut_usuario\":\"8\", \"nombre_usuario\":\"carolina andrea\", \"apellido_paterno_usuario\":\"cortes\", \"apellido_materno_usuario\":\"sierra\", \"ciudad_usuario\":\"santiago\", \"comuna_usuario\":\"santiago\", \"direccion_usuario\":\"fray\", \"nro_direccion\":190, \"celular_usuario\":\"94298318\", \"email_usuario\":\"candrea@gmail.com\", \"whatsap_usuario\":\"56912345678\", \"tipo_admin_usuario\":1, \"vigencia_usuario\":1}'",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  },
  {
    "type": "delete",
    "url": "/usuario/:id",
    "title": "",
    "name": "deleteUsuario",
    "description": "<p>Delete Usuario by Id</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -X DELETE http://localhost:8083/api/sistema/usuario/13745275",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  },
  {
    "type": "get",
    "url": "/usuario",
    "title": "",
    "name": "getAllUsuario",
    "description": "<p>Get All Usuario</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -i http://localhost:8083/api/sistema/usuario",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  },
  {
    "type": "get",
    "url": "/usuario/getById/:id",
    "title": "",
    "name": "getById",
    "description": "<p>Get Usuario By Id</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -i http://localhost:8083/api/sistema/usuario/getById/13745275",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  },
  {
    "type": "get",
    "url": "/usuario/param1/137452758/param2/123456",
    "title": "",
    "name": "loginUsuario",
    "description": "<p>Get Usuario Login</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -i http://localhost:8083/api/sistema/usuario/loginUsuario/param1/137452758/param2/123456",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  },
  {
    "type": "put",
    "url": "/usuario/:id",
    "title": "",
    "name": "updateUsuario",
    "description": "<p>Update Usuario</p>",
    "group": "Usuario",
    "examples": [
      {
        "title": "Example usage:",
        "content": "curl -H \"Content-Type:application/json\" -X PUT \"Content-Type:application/json\" http://localhost:8083/api/sistema/usuario/13745275 -d '{\"nombre_usuario\":\"aracelli diaz\"}'",
        "type": "curl"
      }
    ],
    "version": "0.0.0",
    "filename": "app/Http/Controllers/UsuarioController.php",
    "groupTitle": "Usuario"
  }
] });
