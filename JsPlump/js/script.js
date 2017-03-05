
        var id = 0; 
        var txtval="";
        jsPlumb.ready(function () {

            
            //FIX DOM:
            $(("#container1"))[0].innerHTML = $(("#MainContainer"))[0].innerHTML;

            //all windows are draggable
            jsPlumb.draggable($(".window"));


            var anEndpointDestination = {
                endpoint: "Dot",
                isSource:true,
                isTarget:true,
                maxConnections:-1,
                connectorHoverStyle: { strokeStyle:"green" },
                paintStyle:{ strokeStyle:"blue", lineWidth:10 },
                hoverPaintStyle:{ strokeStyle:"red" },
                endpointStyle:{ fillStyle:"blue", outlineColor:"black", outlineWidth:1 },
                endpointHoverStyles:[ 
                    { fillStyle:"red" }, 
                    { fillStyle:"yellow" } 
                ]
            };


            $("body").on('click','.button_add', this, function () {
                
                var parentnode = $(this).parent().parent();

                
                jsPlumb.addEndpoint(
                    parentnode,
                    anEndpointDestination
                );

            });
            
            $("body").on("click", ".button_remove", this, function () {
                
                var parentnode = $(this)[0].parentNode.parentNode;

                //get list of current endpoints
                var endpoints = jsPlumb.getEndpoints(parentnode);
                
                //remove last one
                
                if (endpoints && endpoints.length > 0) {
                    jsPlumb.deleteEndpoint(endpoints[endpoints.length - 1]);
                }
            });
           

            //adds new window
            $(".button_add_window").click(function () {
                 var objname = prompt ("Enter Object Name");
                 var id = "Container"  + $(".window").length + "_" + objname;  

                //create new window and add it to the body
                $('<div class="window" id="' + id + '" >').appendTo('body').html($(("#MainContainer"))[0].innerHTML);

                //set jsplumb properties
                jsPlumb.draggable($('#' + id));
          
            });

            jsPlumb.bind('click', function (connection, e) {
                alert("Are you sure want to detach connection ");
                 jsPlumb.detach(connection);
             }); 

            jsPlumb.bind("jsPlumbConnection", function(ci) { // ci is connection info.

                var s=ci.sourceId,t=ci.targetId;
                for (var j = 0; j > 0; j++) 
                {
                    s = s + "<td>" + ci[j].s + "</td><td>" + ci[j].t + "</td></tr>";
                }
                txtval= txtval + "->" + s+ " -> " + t
                $("table").html(txtval);
            });
         
        });
