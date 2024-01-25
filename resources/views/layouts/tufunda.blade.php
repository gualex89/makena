<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fabric.js con fondo transparente</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.js"></script>
</head>
<body>
  <canvas id="canvas" width="400" height="500"></canvas>
  <input type="file" id="imageLoader" />
  <button onclick="cambiarOrden()">Ajustar a la Funda</button>
  <button id="btn">Generar imagen</button>
  <button onclick="enviarAlFondo()">Modificar imagen</button>
  <button onclick="window.location.href='/'">Ir a la página principal</button>


  
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script>
    // Inicializar el canvas
    var canvas = new fabric.Canvas('canvas');

    // Variables para almacenar las imágenes
    var fondoImg, userImg;

    // Agregar imagen de fondo con área transparente en el centro
    fabric.Image.fromURL('{{ asset('canv1.png') }}', function(bgImg) {
      bgImg.set({
        width: canvas.width,
        height: canvas.height,
        selectable: false  // Para que no se pueda seleccionar el fondo
      });
      canvas.add(bgImg);
      fondoImg = bgImg;
    });
    

    // Manejar la carga de imágenes por parte del usuario
    document.getElementById('imageLoader').addEventListener('change', function(e) {
      var file = e.target.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        fabric.Image.fromURL(e.target.result, function(img) {
          // Ajustar propiedades de la imagen del usuario
          img.set({
            hasControls: true,
            hasBorders: true,
            selectable: true,
            cornerColor: 'red'
          });

          // Añadir la imagen del usuario al canvas
          canvas.add(img);

          // Mover la imagen del usuario detrás del fondo
          canvas.sendToBack(img);

          userImg = img;
        });
      };

      reader.readAsDataURL(file);
    });

    // Función para cambiar el orden de las imágenes
    function cambiarOrden() {
      if (userImg && fondoImg) {
        // Eliminar las imágenes del canvas
        canvas.remove(fondoImg);
        canvas.remove(userImg);

        // Volver a añadir las imágenes en el orden deseado
        canvas.add(fondoImg);
        canvas.add(userImg);

        // Mover la imagen del usuario detrás del fondo
        canvas.sendToBack(userImg);

        // Actualizar el canvas
        canvas.renderAll();
      }
    }

    // Función para enviar la imagen de fondo al fondo del canvas
    function enviarAlFondo() {
      if (fondoImg) {
        canvas.sendToBack(fondoImg);
        
        canvas.renderAll();
      }
    }

    // Función para generar y descargar la imagen solo de la imagen subida
    function descargarImagenSubida() {
      if (userImg) {
        const dataURL = userImg.toDataURL("image/png");
        const a = document.createElement("a");
        a.download = "imagen_subida";
        a.href = dataURL;
        a.click();
      }
    }

    // Manejar clic en el botón "Generar imagen"
    btn.onclick = () => {
      // Descargar la imagen de la composición de ambas imágenes
      const dataURL = canvas.toDataURL("image/png");
      const a = document.createElement("a");
      a.download = "composicion";
      a.href = dataURL;
      a.click();

      // Descargar la imagen solo de la imagen subida
      descargarImagenSubida();
    };
  </script>
<div id="app">
  <ejemplo-componente></ejemplo-componente>
</div>
</body>
</html>
