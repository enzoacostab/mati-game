function validateform()
{
  let name=document.forms["my form"]["usuario"].value;
  let contra=document.forms["my form"]["contra"].value;
  if (name=="" || contra=="")
  {
      alert("ingrese usuario y contraseña");
      return false;
  }
};

function validatereg()
{
    let name=document.forms["reg"]["usuario"].value;
    let contra=document.forms["reg"]["contra"].value;
    let email=document.forms["reg"]["email"].value;
    let confc=document.forms["reg"]["conf_contra"].value;
    if (name=="" || contra=="" || email=="" || confc=="")
    {
        alert("complete todos los campos");
        return false;
    }
    else if (contra!==confc)
    {
        alert("las contraseñas no coinciden");
        return false;
    }
};

  


