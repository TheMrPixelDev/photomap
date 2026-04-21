<h1>Neues Foto hochladen</h1>

{{ if: $error = session()->take('error') }}
    <div class="notification">
        <p>{{ ==$error }}</p>
    </div>
{{ if; }}

<form action="/" method="post" enctype="multipart/form-data">
    <label for="title"><b>Titel</b></label>
    <input type="text" required minlength="2" maxlength="100" name="title" id="title" value="{{ session()->take('title') }}" />

    <label for="author"><b>Autor:in</b></label>
    <input type="text" required minlength="2" maxlength="100" name="author" id="author" value="{{ session()->take('author') }}" />

    <label><b>Koordinaten</b></label>

    <p>Diese Koordinaten werden nur verwendet, falls das Bild selbst keine enthält.
        Unter <span class="highlight">Android</span> unbedingt manuell den Ort <a href="/">auf der Karte auswählen</a>
        oder hier die Koordinaten eingeben, da dort die Position automatisch gelöscht wird.</p>

    <div class="row">
        <input type="number" id="lat" name="lat" value="{{ $coords[0] }}" />
        <input type="number" id="lon" name="lon" value="{{ $coords[1] }}" />
    </div>

    <label for="photo"><b>Foto</b></label>
    <div class="file-input-wrapper">
        <div class="drop-zone" id="dropZone">
            <input type="file" id="photo" name="photo" required accept="*/*"
                onchange="this.closest('.drop-zone').classList.toggle('has-file', this.files.length > 0)" />
            <div class="drop-zone-text" id="dropText">
                Foto wählen oder hierher ziehen <span>JPG bis 10 MB</span>
            </div>
        </div>
    </div>

    <div class="row mt end">
        <a href="/" class="btn">Zurück</a>
        <input type="submit" class="btn" value="Speichern" />
    </div>
</form>
