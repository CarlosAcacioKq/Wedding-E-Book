function deleteAll() {
    if (confirm('Do you want to delete all the guests?')) {
        window.location = "./endpoint/delete-all.php";
    }
}