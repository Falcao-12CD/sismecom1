using Microsoft.AspNetCore.Mvc;
using Sismecom.Infra.Repository.Pessoas;
using Sismecom.Models.Pessoas;

namespace Sismecom.Controllers.Pessoas
{
    
   
    public class MedicoController : ControllerBase
    {
        private readonly IMedicoRepository _repo;

        public MedicoController(IMedicoRepository repo)
        {
            _repo = repo;
        }
        [HttpGet("[controller]/Lista")]
        public IActionResult Listar()
        {
            var medicos = _repo.Listar();
            return Ok(medicos);
        }


        [HttpPost("[controller]/Cadastro")]
        public IActionResult Cadastrar([FromBody] Medico model)
        {
            _repo.Cadastrar(model);
            return Ok();
        }
    }
}
