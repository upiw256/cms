import "./bootstrap";

import Swal from "sweetalert2";
Window.Swal = Swal;
if (message) {
    Swal.fire(message);
}
