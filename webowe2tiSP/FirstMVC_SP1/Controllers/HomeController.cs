using Microsoft.AspNetCore.Mvc;

namespace FirstMVC_SP1.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index(){
            return Content("Hello from MVC bla bla bla");
        }
    }
}