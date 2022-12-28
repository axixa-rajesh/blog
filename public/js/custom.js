function checkUser(name, obj) {
    if (name.trim()) {
        
        $.ajax({
            url: root + "author/checkeduser",
            type: 'post',
            data: 'name=' + name,
            success: function (r) {
                obj.innerHTML = r;  
                if ($('#na').length) {
                    document.getElementById('username').value = '';
                    document.getElementById('username').focus();
                }
            }
        })
    }
    
}