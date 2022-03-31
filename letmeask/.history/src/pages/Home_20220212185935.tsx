import illustrationImg from '../assets/images/illustration.svg' 
import LogoImg from '../assets/images/logo.svg';
import GoogleIconImg from '../assets/images/google-icon.svg';

import '../styles/button.scss';

import {Button} from '../components/Button';


export function Home() {
   return(
    <div id="page-auth">
      <aside>
        <img src={illustrationImg} alt="Ilustração simbolizando troca de perguntas e respostas" />
        <strong>Crie salas de Q&amp; A ao-vivo</strong>
        <p>Tire as duvidas da sua audiência em tempo-real</p>
      </aside>
      <main>
        <div className="main-content">
          <img src={LogoImg} alt="Letmeask"/>
          <button className="create-room">
            <img src={GoogleIconImg} alt="Logo do Google" />
            Crie sua sala com o google
          </button>
          <div className="separator">Ou entre em uma sala</div>
          <form>
            <input 
            type="text" placeholder="Digite o código da sala"
            />

            <Button type="submit" className="button">
              Entrar na sala
            </Button>
          </form>
        </div>
      </main>
    </div>
   )
}