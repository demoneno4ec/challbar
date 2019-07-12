function getStoredItem(item) {
  if (!localStorage.getItem("lpg3746_"+item) && localStorage.getItem("lpg3746_"+item) != "false")
    return false;
  else
    return localStorage.getItem("lpg3746_"+item);
}
function setStoredItem(item,value) {
  if (value == null || value == "" || value == undefined)
    return false;
  else
    return localStorage.setItem("lpg3746_"+item,value);
}

function getField(name,array) {
  for (var i = array.length - 1; i >= 0; i--) {
    if (array[i].name == name)
    {
      return array[i].value;
    }
  }
  return false;
}

$(document).ready(function() {

    $("input[name=phone]").inputmask({
        "mask": "+ 7 (999) 999-9999",
        showMaskOnHover: false
    });

    $('input[name="form[phone]"]').inputmask({
      "mask": "+ 7 (999) 999-9999",
      showMaskOnHover: false
    });

    $(function(){
      let $elems      = $('.animateblock');
      let winheight   = $(window).height();
      let fullheight  = $(document).height();
      
      $(window).scroll(function(){
        animate_elems();
      });
      
      function animate_elems() {
        wintop = $(window).scrollTop(); // calculate distance from top of window
     
        // loop through each item to check when it animates
        $elems.each(function(){
          $elm = $(this);
          
          if($elm.hasClass('animated')) { return true; } // if already animated skip to the next item
          
          topcoords = $elm.offset().top; // element's distance from top of page in pixels
          
          if(wintop > (topcoords - (winheight*.75))) {
            // animate when top of the window is 3/4 above the element
            $elm.addClass('animated');
          }
        });
      } // end animate_elems()
    });

    $('a.link-modal-form').on('click', function () {
      let $this = $(this);
      let titleForm = $this.data('title');
      let inputTitle = $('#modal form input[name="form-name"]');
      if (!!titleForm && !!inputTitle){
        inputTitle.val(titleForm);
      }
    });

    $(document).on('submit', '.index-form', function (event) {
      event.preventDefault();
      let submitedFrom = $(this);
      let action = submitedFrom.prop('action');
      let method = submitedFrom.prop('method');
      let data = submitedFrom.serializeArray();
      let preloader = submitedFrom.find("div.preload__box");
      if (preloader === undefined) {
        preloader = false;
      }

      $.ajax({
        type        : method,
        url         : action,
        data        : data,
        dataType    : "json",
        beforeSend  : function () {
          if (preloader) {
            preloader.show();
          }
        },
        success     : function (resp) {
          let status = resp.status;
          let errors = resp.errors,
            message = resp.message;
          if (status === 'success'){
            window.location.href = "thanks.php"
          } else if(!!errors){
            $.each(errors, function(name, error){
              let nameInput = 'input[name="form[' + name + ']"]';

              let inputError = submitedFrom.find(nameInput);
              if(!!inputError){
                inputError.addClass('error');
              }
            });

            if (preloader) {preloader.hide();}
          }else{
            alert("Something was wrong. Please, contact administrator.")
            if (preloader) {preloader.hide();}
          }
        }
      });
      return false;
    });

    $(document).on('submit', '.thanks-form', function (event) {
      event.preventDefault();
      let submitedFrom = $(this);
      let data  = submitedFrom.serializeArray();
      let formData = new FormData();
      let preloader = submitedFrom.find("div.preload__box");
      if (preloader == undefined) { preloader = false;}

      setStoredItem('name', getField("name",data));
      setStoredItem('city', getField("city",data));

      if (!getField("name",data)&&getStoredItem("name")!="false"&&getStoredItem("name"))
      {
        data.push({name:"name", value:getStoredItem("name")});
      }

      if (!getField("city",data)&&getStoredItem("city")!="false"&&getStoredItem("city"))
      {
        data.push({name:"city", value:getStoredItem("city")});
      }
      for (let i = data.length - 1; i >= 0; i--) {
        formData.append(data[i].name,data[i].value);
      }


      $.ajax({
        type: "POST",
        url: "php/formProcessor.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function() {
          if (preloader) {preloader.show();}
        },
        success: function(resp)
        {
          if (resp == 1)
          {
            window.location.href = "thanks.php"
          }
          else if (resp == 2)
          {
            $("button[data-fancybox-close]").trigger("click");
            if (preloader) {preloader.hide();}
          }
          else
          {
            alert("Something was wrong. Please, contact administrator.")
            if (preloader) {preloader.hide();}
          }
        }
      });
      return false;
    });
    /* old
    // Form Process
    $(document).on("submit","form", function(event){
      event.preventDefault();
      let submitedFrom = $(this);
      let data  = submitedFrom.serializeArray();
      let formData = new FormData();
      let preloader = submitedFrom.find("div.preload__box");
      if (preloader == undefined) { preloader = false;}

      setStoredItem('name', getField("name",data));
      setStoredItem('city', getField("city",data));

      if (!getField("name",data)&&getStoredItem("name")!="false"&&getStoredItem("name"))
      {
        data.push({name:"name", value:getStoredItem("name")});
      }

      if (!getField("city",data)&&getStoredItem("city")!="false"&&getStoredItem("city"))
      {
        data.push({name:"city", value:getStoredItem("city")});
      }
      for (let i = data.length - 1; i >= 0; i--) {
        formData.append(data[i].name,data[i].value);
      }


      $.ajax({
        type: "POST",
        url: "php/formProcessor.php",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "json",
        beforeSend: function() {
          if (preloader) {preloader.show();}
        },
        success: function(resp)
        {
          if (resp == 1)
          {
            window.location.href = "thanks.php"
          }
          else if (resp == 2)
          {
            $("button[data-fancybox-close]").trigger("click");
            if (preloader) {preloader.hide();}
          }
          else
          {
            alert("Something was wrong. Please, contact administrator.")
            if (preloader) {preloader.hide();}
          }
        }
      });
      return false;
    });
*/
    if (document.getElementById("thanksNameModal") != undefined)
    {
      $("#formCaller").trigger("click");
      if (getStoredItem("city") && getStoredItem("city") != "false")
        document.getElementById("city").value = getStoredItem("city").trim();

      if (getStoredItem("name") && getStoredItem("name") != "false")
      {
        var thankNameText = $("#thanksNameModal").text();
        $("#thanksNameModal").text(getStoredItem("name").trim()+', '+thankNameText.toLowerCase());
        $("#thanksName").text(getStoredItem("name").trim()+',');
      }
      else
      {
        $("#thanksNameModal").text("Спасибо!");
        $("#thanksName").text("Наши");
      }
    }

    //Modal buttons
    $("a[data-fancybox]").click(function(){
      var title = $(this).attr("title");
      $("#modalTitle").text(title);
    });
});