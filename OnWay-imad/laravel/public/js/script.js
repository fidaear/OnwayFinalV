function moveText() {
    var inputText = document.getElementById("inputText").value;
    if (inputText.trim() === "") {
        return; // Ne rien faire si le champ est vide
    }

    var newDiv = document.createElement("div");
    newDiv.className = "output-item";
    newDiv.innerHTML = inputText;
    var closeButton = document.createElement("span");
    closeButton.className = "close-btn";
    closeButton.innerHTML = "<i class='bi bi-x-lg'></i>";
    closeButton.onclick = function() {
        this.parentNode.remove();
        updateHiddenInput('hiddenSkills','.output-item');
    };
    newDiv.appendChild(closeButton);
    document.getElementById("output-container").appendChild(newDiv);
    document.getElementById("inputText").value = "";

    // Activer la fonctionnalité de glisser-déposer avec grille
    $(newDiv).draggable({
        containment: "#output-container", // Limiter le mouvement à l'intérieur du conteneur
        grid: [10, 10] // Utiliser une grille de 10x10 pixels
    });
    updateHiddenInput('hiddenSkills','.output-item');
}

function updateHiddenInput(hidden,items) {
    var outputItems = document.querySelectorAll(items);
    var values = Array.from(outputItems).map(function(item) {
        return item.innerText.trim();
    });
    document.getElementById(hidden).value = values;
}

function addLangue() {
    var langue = document.getElementById("langue").value;
    if (langue.trim() === "") {
        return; // Ne rien faire si le champ est vide
    }
    var level = document.getElementById("level").value;

    var newDiv = document.createElement("div");
    newDiv.className = "langue-item";
    newDiv.innerHTML = langue + ' | ' + level;
    var closeButton = document.createElement("span");
    closeButton.className = "close-btn";
    closeButton.innerHTML = "<i class='bi bi-x-lg'></i>";
    closeButton.onclick = function() {
        this.parentNode.remove();
        updateHiddenInput('hiddenLangues','.langue-item');
    };
    newDiv.appendChild(closeButton);
    document.getElementById("langue-container").appendChild(newDiv);
    document.getElementById("langue").value = "";

    // Activer la fonctionnalité de glisser-déposer avec grille
    $(newDiv).draggable({
        containment: "#langue-container", // Limiter le mouvement à l'intérieur du conteneur
        grid: [10, 10] // Utiliser une grille de 10x10 pixels
    });
    updateHiddenInput('hiddenLangues','.langue-item');
}



document.getElementById('pic').addEventListener('change', function (event) {
    var fileInput = event.target;
    var file = fileInput.files[0];

    if (file) {
        // Utiliser FileReader pour lire le contenu du fichier en tant que données URL
        var reader = new FileReader();
        
        reader.onload = function (e) {
            // Créer une balise image et définir son src avec les données URL
            var img = document.getElementById('pic-place');
            img.src = e.target.result;
            
            // Ajouter l'image à la div
           
        };

        // Lire le contenu du fichier en tant que données URL
        reader.readAsDataURL(file);
    }
});



document.getElementById('pdf-input').addEventListener('change', handleFileSelect);
    
            function handleFileSelect(event) {
                var file = event.target.files[0];
    
                if (file && file.type === 'application/pdf') {
                    var reader = new FileReader();
    
                    reader.onload = function(e) {
                        var pdfData = new Uint8Array(e.target.result);
                        displayPdf(pdfData);
                    };
    
                    reader.readAsArrayBuffer(file);
                } else {
                    alert('Veuillez sélectionner un fichier PDF valide.');
                }
            }
    
            function displayPdf(pdfData) {
                // Chargement du document PDF avec PDF.js
                pdfjsLib.getDocument({data: pdfData}).promise.then(function(pdf) {
                    // Affichage de la première page dans la div
                    pdf.getPage(1).then(function(page) {
                        var canvas = document.createElement('canvas');
                        var context = canvas.getContext('2d');
    
                        // Définir la taille du canvas en fonction de la taille de la page
                        var targetWidth = 120;
                    var scale = targetWidth / page.getViewport({scale: 1}).width;

                    // Calculer la hauteur en fonction de la largeur et de la proportion originale
                    var targetHeight = page.getViewport({scale: scale}).height;

                    canvas.width = targetWidth;
                    canvas.height = targetHeight;

                    // Dessiner la page sur le canvas
                    var renderContext = {
                        canvasContext: context,
                        viewport: page.getViewport({ scale: scale })
                    };
                        page.render(renderContext).promise.then(function() {
                            // Ajouter le canvas à la div de prévisualisation
                            var previewDiv = document.getElementById('cv-document');
                            previewDiv.innerHTML = '';
                            previewDiv.appendChild(canvas);
                        });
                    });
                });
            }