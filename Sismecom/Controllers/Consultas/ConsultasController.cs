using Microsoft.AspNetCore.Mvc;
using Sismecom.Infra.Repository.Consultas;
using Sismecom.Models.Consultas;

namespace Sismecom.Controllers.Consultas
{
    
   
    public class ConsultasController : ControllerBase
    {
        private readonly IConsultaRepository _repo;
       

        public ConsultasController(IConsultaRepository repo)
        {
            _repo = repo;
        }
        [HttpPost("[controller]/Agendar")]
        public IActionResult AgendarConsulta([FromBody] ConsultaRequest request)
        {
        
            _repo.AgendarConsulta(request);
            return Ok();
        }
        [HttpPost("[controller]/Desmarcar")]
        public IActionResult DesmarcarConsulta()
        {
            return Ok();
        }
        [HttpGet("[controller]/Lista-paciente/{pacienteId}")]
        public IActionResult ListarPorPaciente()
        {
            return Ok();
        }
        [HttpGet("[controller]/Lista-medico/{medicoId}")]
        public IActionResult ListarMedico()
        {
            return Ok();
        }
    }
}
