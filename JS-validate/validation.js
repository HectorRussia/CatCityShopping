const validation =new JustValidate("#registor");

validation

    .addField("#username",
    [
        {
            rule:"required"
        }
    ])
    .addField("#user_surname",
    [
        {
            rule:"required"
        }
    ])
    .addField("#email",
    [
        {
            rule:"required"
        },
        {
            rule:"email"
        },
        {
            validator:(value)=>()=>
            {
                return fetch("validate-email.php?email="+encodeURIComponent(value))
                        .then(function(response)
                        {
                            return response.json();
                        })
                        .then(function(json)
                        {
                            return json.available;
                        });
                        
            },
            errorMessage: "email already taken"
        }
    ])
    .addField("#password",
    [
        {
            rule:"required"
        },
        {
            rule:"password"
        }
    ])
    .addField("#Repeat",
    [
        {
            validator:(value,fields)=>
            {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .addField("#user_address",
    [
        {
            rule:"required"
        },
        {
            rule:"password"
        }
    ])
    .addField("#user_contact",
    [
        {
            rule:"required"
        }
    ])
    .onSuccess((event)=>
    {
        document.getElementById("registor").submit();
    })