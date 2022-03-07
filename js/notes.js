document.querySelectorAll(".note").forEach(note => {
    note.onmousedown = (startPos) => {
        note.classList.add("note_hidden");

        document.onmousemove = (e) => {
            let newPosX = e.screenX - startPos.screenX;
            let newPosY = e.screenY - startPos.screenY;
            let notes = document.querySelectorAll(".note");
            
            if (note != notes[notes.length - 1] && newPosX > 75) {
                note.nextSibling.after(note);
                startPos = e;
            }
            else if (note != notes[0] && newPosX < -75) {
                note.previousSibling.before(note);
                startPos = e;
            }
        }

        document.onmouseup = () => {
            document.onmousemove = null;
            note.onmouseup = null;
            note.classList.remove("note_hidden");
        }
    }
});