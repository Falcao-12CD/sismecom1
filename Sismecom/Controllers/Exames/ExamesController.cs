using Microsoft.AspNetCore.Mvc;

namespace Sismecom.Controllers.Exames
{
    
   
    public class ExamesController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
