<?php
echo "
<script type=\"text/javascript\">(function(d, t, e, m){    
    
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: '".$row['user_id']."',
            uid: \"5c4f6f81191890288de05d59c79ac9ea\",
            source: \"website\",
            options: {
                \"advanced\": {
                    \"font\": {
                        \"size\": \"14px\"
                    },
                    \"text\": {
                        \"rateAwful\": \"Not Good\",
                        \"rateThis\": \"rating\"
                    }
                },
                \"size\": \"medium\",
                \"style\": \"oxygen1\",
                \"isDummy\": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = \"rw-js\",
        l = d.location, ck = \"Y\" + t.getFullYear() + 
        \"M\" + t.getMonth() + \"D\" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf(\"DBG=\") > -1) ? \"\" : \".min\"),
        a = (\"https:\" == p ? \"secure.\" + m + \"js/\" : \"js.\" + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = \"text/javascript\";
    rw.src = p + \"//\" + a + \"external\" + f + \".js?ck=\" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), \"script\", \"rating-widget.com/\"));
</script> ";

			

			
			echo "<div style='margin-left:10px' class=\"rw-ui-container\"></div>";

            ?>