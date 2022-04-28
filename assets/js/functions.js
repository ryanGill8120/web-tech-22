

function updateContent(page){
    $.ajax({
        type:'post',
        url:'https://ec2-3-84-158-169.compute-1.amazonaws.com/'+page+'.php', 
        success:function(data){
            //
			switch (page){
                case "home":
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    break;
                case "school":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("school").classList.add("active");
                    break;
                case "work":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("work").classList.add("active");
                    break;
                case "contact":
                    document.getElementById("home").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("contact").classList.add("active");
                    break;
                default:
                    document.getElementById("school").classList.remove("active");
                    document.getElementById("work").classList.remove("active");
                    document.getElementById("contact").classList.remove("active");
                    document.getElementById("home").classList.add("active");
                    break;
            };
            $('#mainContent').html(data);//Show fetched data 
        }
    });
};